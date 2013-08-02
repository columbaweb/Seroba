<?php get_header(); ?>

<div id="content">
   <img src="<?php bloginfo('template_url'); ?>/images/full-top-grey.jpg" width="884" height="28" alt="" />
   <div class="row">
       <?php include 'sidebarleft.php'; ?>
     
     <?php if (have_posts()): while (have_posts()): the_post(); ?>
         <article id="post-<?php the_ID(); ?>" class="page col9 last">
            <div class="container">
               <h1><?php the_title(); ?></h1>
               <?php the_content(); ?>
<!-- link to page -->
               <?php if(get_field('link_to_page' ) != "" && get_field('page_name' ) != ""): ?>
                   <a class="link-to-page" href="<?php the_field('link_to_page'); ?>">&lt; <?php the_field('page_name'); ?></a>
               <?php endif; ?>
            </div>
         </article>
      <?php endwhile; endif; ?>
     
   </div>
</div>

<?php get_footer(); ?>