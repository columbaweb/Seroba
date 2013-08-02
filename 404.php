<?php get_header(); ?>

<div id="content">
   <img src="<?php bloginfo('template_url'); ?>/images/full-top-grey.jpg" width="884" height="28" alt="" />
   <div class="row">
         <article id="post-<?php the_ID(); ?>" class="page col8">
            <div class="container">
               <h1>The page you are looking for does not exist</h1>
               <p>Something has gone wrong and the page you're looking for can't be found.<br />
               Hopefully one of the options below will help you:</p>
               <ul class="searchpage">
                  <li><span>You can search the site using the search box</span></li>
                  <li><span>You could visit <a href="">the homepage</a></span></li>
                  <li><span>Or you could have a look through the recent posts listed below, maybe what you're looking for is there</span></li>
               </ul>
               <h2>Recent Posts</h2>
               <ul>
                  <?php query_posts('posts_per_page=5');
                  if (have_posts()) : while (have_posts()) : the_post(); ?>
                     <li><a href="<?php the_permalink() ?>" title="Permalink for : <?php the_title(); ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; endif; ?>
               </ul>
            </div>
         </article>
         
         <?php get_sidebar(); ?>

   </div>
</div>

<?php get_footer(); ?>


