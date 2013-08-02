<?php get_header(); ?>

<div id="content">
  <img src="
<?php bloginfo('template_url'); ?>/images/full-top-grey.jpg" width="884" height="28" alt="" />
  <div class="row">
    <?php include 'sidebarleft.php'; ?>
    <div class="col9 last archive">
      <div class="page-header">
        <?php if (is_category()) { ?>
        <h1 class="archive_title h2">
          News from 
          <?php single_cat_title(); ?>
        </h1>
        <?php } elseif (is_tag()) { ?>    
        <h1 class="archive_title h2">
          News from 
          <?php single_tag_title(); ?>
        </h1>
        <?php } elseif (is_author()) { ?>
        <h1 class="archive_title h2">
          News from 
          <?php get_the_author_meta('display_name'); ?>
        </h1>
        <?php } elseif (is_day()) { ?>
        <h1 class="archive_title h2">
          News from 
          <?php the_time('l, F j, Y'); ?>
        </h1>
        <?php } elseif (is_month()) { ?>
        <h1 class="archive_title h2">
          News from 
          <?php the_time('F Y'); ?>
        </h1>
        <?php } elseif (is_year()) { ?>
        <h1 class="archive_title h2">
          News from 
          <?php the_time('Y'); ?>
        </h1>
        <?php } ?>
      </div>   
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>     
      <article id="post-<?php the_ID(); ?>" class="news-article" role="article">
         <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
         <?php the_excerpt(); ?>
      </article>
         <?php endwhile; ?>
           <?php if (function_exists('page_navi')) { // if expirimental feature is active ?>  
           <div class="pagination">
             <?php wp_pagination(); ?>
           </div>
           <?php } else { // if it is disabled, display regular wp prev & next links ?>
           <div class="navigation">
             <p><?php posts_nav_link(' | ','< Previous Page','Next Page >'); ?></p>
           </div>
           <?php } ?>
           <?php else : ?>
           <article id="post-not-found">
             <p>
               Sorry, What you were looking for is not here
             </p>
           </article>
           <?php endif; ?>
     </div>
  </div>
</div>

<?php get_footer(); ?>