<aside id="sidebar-left" class="col3">
     
      <?php if ( is_category('our-news')) { ?>
         <h2>News</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('News') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('our-news')) { ?>
         <h2>News</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('News') ) : ?><?php endif; ?>
         
      <?php } elseif ( is_category('our-portfolio')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('our-portfolio')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>   
         
      <?php } elseif ( is_category('diagnostics')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('diagnostics')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>    
         
      <?php } elseif ( is_category('instrumentation')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('instrumentation')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>     
      
      <?php } elseif ( is_category('instrumentation')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('instrumentation')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?> 
         
      <?php } elseif ( is_category('medical-devices')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('medical-devices')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>    
         
      <?php } elseif ( is_category('therapeutics')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('therapeutics')) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>    
      
      <?php } elseif ( is_category('our-team')) { ?>
         <h2>Our Team</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Team') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('our-team')) { ?>
         <h2>Our Team</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Team') ) : ?><?php endif; ?>    
         
      <?php } elseif ( is_category('investment-team')) { ?>
         <h2>Our Team</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Team') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('investment-team')) { ?>
         <h2>Our Team</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Team') ) : ?><?php endif; ?>    
      
      <?php } elseif ( is_category('non-executive-directors')) { ?>
         <h2>Our Team</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Team') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('non-executive-directors')) { ?>
         <h2>Our Team</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Team') ) : ?><?php endif; ?>     
         
      <?php } elseif ( is_category('operations-team')) { ?>
         <h2>Our Team</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Team') ) : ?><?php endif; ?>
         
      <?php } elseif ( in_category('operations-team')) { ?>
         <h2>Our Team</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Team') ) : ?><?php endif; ?>    
      
      <?php } elseif ( is_page('sectors') || $post->post_parent == 579) { ?>
         <h2>Our Sectors</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sectors') ) : ?><?php endif; ?>  
         
      <?php } elseif ( is_page('our-philosophy') || $post->post_parent == 43) { ?>
         <h2>Our Philosophy</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Philosophy') ) : ?><?php endif; ?>    
         
      <?php } elseif ( is_page('our-funds') || $post->post_parent == 583) { ?>
         <h2>Our Funds</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Funds') ) : ?><?php endif; ?>
         <a class="download-link" target="_blank" href="<?php bloginfo('template_url'); ?>/documents/Seroba_Kernel_Confidentiality_Agreement.pdf" ><img class="size-full" src="<?php bloginfo('template_url'); ?>/images/download_button.jpg" width="139" height="83" alt="Confidentiality Agreement" /></a>
         
      <?php } elseif ( is_page('investment-team') || $post->post_parent == 45) { ?>
         <h2>Our Team</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Team') ) : ?><?php endif; ?>  
         
      <?php } elseif ( is_page('portfolio') || $post->post_parent == 47) { ?>
         <h2>Portfolio</h2>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Portfolio') ) : ?><?php endif; ?>  
          
      <?php } elseif ( is_page('contact-us')) { ?>
         <h2>Contact Us</h2>
      	     
      <?php } else {  ?>
      	<h2><?php the_title(); ?></h2>
      <?php }?>

</aside>