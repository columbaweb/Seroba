<aside id="sidebar" class="col4 last">
   <img src="<?php bloginfo('template_url'); ?>/images/topNarrowBlue.jpg" width="305" height="28" alt="" />
   <div class="container">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?><?php endif; ?>   
   </div>   
   <img class="img-bottom" src="<?php bloginfo('template_url'); ?>/images/bottomNarrowBlue.jpg" width="305" height="28" alt="" />
</aside>