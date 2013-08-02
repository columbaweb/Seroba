<?php /* Template Name: Homepage */  ?>

<?php get_header(); ?>

<div id="content">
   <div id="slider" class="row">
      <?php echo get_new_royalslider(1); ?>
   </div>
   
   <div class="row">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
         <article id="post-<?php the_ID(); ?>" class="home col8">
            <img src="<?php bloginfo('template_url'); ?>/images/topWideGrey.jpg" width="574" height="28" alt="" />
               <div class="container">
                  <?php the_content(); ?>
               </div>   
            <img src="<?php bloginfo('template_url'); ?>/images/bottomWideGrey.jpg" width="574" height="28" alt="" />
         </article>
      <?php endwhile; endif; ?>
      
      <?php get_sidebar(); ?>     
   </div>   
         
</div>   <!-- content end -->

<?php get_footer(); ?>