<?php get_header(); ?>

<div id="content">
   <img src="<?php bloginfo('template_url'); ?>/images/full-top-grey.jpg" width="884" height="28" alt="" />
   <div class="row">
     <?php include 'sidebarleft.php'; ?>
     
      <section id="news" class="col9 last">
         <h1><?php single_cat_title(); ?></h1>
         <article <?php post_class('portfolio post-excerpt'); ?> > 
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <?php if(has_post_thumbnail()) :?><a class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><?php endif;?>
            <?php endwhile; endif; wp_reset_query(); ?>
         </article>   
         <div class="pagination"><?php wp_pagination(); ?></div>
         <a class="clear" href="<?php bloginfo('url'); ?>">&lt; back to home page</a>
      </section>
   </div>
</div>

<?php get_footer(); ?>