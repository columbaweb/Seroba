<?php get_header(); ?>

<div id="content">
   <img src="<?php bloginfo('template_url'); ?>/images/full-top-grey.jpg" width="884" height="28" alt="" />
   <div class="row">
     <?php include 'sidebarleft.php'; ?>
     
      <section id="news" class="col9 last">
         <h1><?php single_cat_title(); ?></h1>
         <?php 
         query_posts("cat=2&posts_per_page=3&paged=$paged");
         if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article <?php post_class('post-excerpt'); ?> >   
               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
               <?php the_excerpt(); ?>
            </article>
         <?php endwhile; endif; wp_reset_query(); ?>   
         <div class="pagination"><?php wp_pagination(); ?></div>
         <a class="clear" href="<?php bloginfo('url'); ?>">&lt; back to home page</a>
      </section>
   </div>
</div>

<?php get_footer(); ?>