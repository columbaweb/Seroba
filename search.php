<?php get_header(); ?>

<div id="content">
   <img src="<?php bloginfo('template_url'); ?>/images/full-top-grey.jpg" width="884" height="28" alt="" />
   <div class="row">
      <aside id="sidebar-left" class="col3">
          <h2>Search Result</h2>
       </aside>
      
         <article id="post-<?php the_ID(); ?>" class="page col9 last">
            <div class="container">
               <h1>Search Results for: <?php the_search_query(); ?></h1>
     <?php if (have_posts()) : ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	     <div <?php post_class('search-excerpt'); ?> >
	          <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		  <?php the_excerpt(); ?>
		  <a class="read-more" href="<?php the_permalink() ?>">Read more...</a>
	     </div>
          <?php endwhile; endif; ?>

          <div class="navigation">
               <div><?php next_posts_link('&laquo; Older Entries') ?></div>
               <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
          </div>
     <?php else : ?>
          <h2>No posts found. Try a different search?</h2>
          <?php include (TEMPLATEPATH . '/searchform.php'); ?>
     <?php endif; ?>
            </div>
         </article>

   </div>
</div>

<?php get_footer(); ?>