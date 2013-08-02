<?php

@define( 'PARENT_DIR', get_template_directory() );

require_once (PARENT_DIR . '/shortcodes.php');

# Register Sidebars
if ( function_exists('register_sidebar') )
   register_sidebar(array('name' => 'Sidebar','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'Sectors','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'Philosophy','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'Funds','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'Team','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'Portfolio','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'News','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'Contact','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   
	
function register_my_menus() {
  register_nav_menus(
    array(
      'topnav' => __( 'Top Menu' ),
      'footnav' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

# Post Thumbnails
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
}



# Displays the comment authors gravatar if available
function dp_gravatar($size=50, $attributes='', $author_email='') {
global $comment, $settings;
if (dp_settings('gravatar')=='enabled') {
if (empty($author_email)) {
ob_start();
comment_author_email();
$author_email = ob_get_clean();
}
$gravatar_url = 'http://www.gravatar.com/avatar/' . md5(strtolower($author_email)) . '?s=' . $size . '&amp;d=' . dp_settings('gravatar_fallback');
?><img src="<?php echo $gravatar_url; ?>" <?php echo $attributes ?>/><?php
}
}

# Puts link in excerpts more tag
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

# custom excerpt length  -  p h p   e c h o   e x c e r p t ( 4 5 )
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

# Shortcode in widgets
add_filter('widget_text', 'do_shortcode');

# PHP in widgets
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

// Limit Post Title
function shortened_title() {
$original_title = get_the_title();
$title = html_entity_decode($original_title, ENT_QUOTES, "UTF-8");
// Set Limit
$limit = "55";
// Set End Text
$ending="...";
if(strlen($title) >= ($limit+3)) {
$title = substr($title, 0, $limit) . $ending; }
echo $title;
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}


// make category use parent category template
function load_cat_parent_template($template) {

    $cat_ID = absint( get_query_var('cat') );
    $category = get_category( $cat_ID );

    $templates = array();

    if ( !is_wp_error($category) )
        $templates[] = "category-{$category->slug}.php";

    $templates[] = "category-$cat_ID.php";

    // trace back the parent hierarchy and locate a template
    if ( !is_wp_error($category) ) {
        $category = $category->parent ? get_category($category->parent) : '';

        if( !empty($category) ) {
            if ( !is_wp_error($category) )
                $templates[] = "category-{$category->slug}.php";

            $templates[] = "category-{$category->term_id}.php";
        }
    }

    $templates[] = "category.php";
    $template = locate_template($templates);

    return $template;
}
add_action('category_template', 'load_cat_parent_template');

add_action('pre_get_posts', 'diff_post_count_per_cat');
 
function diff_post_count_per_cat() {
    if (is_admin()) return;
 
    $cat = get_query_var('category_name');
    switch ($cat) {
        case 'our-portfolio':
            set_query_var('posts_per_page', 16);
            break;
        case 'medical-devices':
            set_query_var('posts_per_page', 16);
            break; 
        case 'diagnostics':
            set_query_var('posts_per_page', 16);
            break;  
        case 'instrumentation':
            set_query_var('posts_per_page', 16);
            break;   
        case 'therapeutics':
            set_query_var('posts_per_page', 16);
            break;            
        case 'investment-team':
            set_query_var('posts_per_page', 6);
            break;       
    }
}

remove_filter('term_description','wpautop');


?>