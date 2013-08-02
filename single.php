<?php get_header(); ?>

<div id="content">
  <img src="<?php bloginfo('template_url'); ?>/images/full-top-grey.jpg" width="884" height="28" alt="" />
  <div class="row">
    <?php include 'sidebarleft.php'; ?>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
  
      <?php if ( in_category('investment-team')) { ?>
        <article id="post-<?php the_ID(); ?>" class="post col9 last">
          <div class="container seroba-team">
            <h1>The Team at Sebora Kernel</h1>
            <img src="<?php bloginfo('template_url'); ?>/images/blueBarTop9col.jpg" width="800" height="32" alt="" />
            
            
            <div class="col4">
               <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" alt="<?php get_the_title(get_field('image')) ?>" /> 
            </div>
            
            <div class="col8 last">
               <h2><?php the_title(); ?></h2>
               <?php the_content(); ?>
               <a class="clear" href="<?php bloginfo('url'); ?>">&lt; back to home page</a>          
            </div>
     
          </div>
        
      <?php } elseif ( in_category('diagnostics')) { ?>
        <article id="post-<?php the_ID(); ?>" class="post col9 last">
          <div class="container portfolio">
            <h1>Portfolio - Diagnostics</h1>
            <img src="<?php bloginfo('template_url'); ?>/images/blueBarTop9col.jpg" width="800" height="32" alt="" />
            
            <div class="col4">
               <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" alt="<?php get_the_title(get_field('image')) ?>" /> 
               <h3>Seroba Kernel Contact:</h3>
               <a href="<?php the_field('seroba_kernel_contact_email'); ?>"><?php the_field('seroba_kernel_contact_name'); ?></a>
            </div>
            
            <div class="col8 last">
               <h2><?php the_title(); ?></h2>
               <?php the_content(); ?>
               <div class="container-related">
                  <p class="more-related">more</p>
                  <?php if(function_exists('echo_ald_crp')) echo_ald_crp(); ?>
               </div>                 
            </div>
          </div>
          
      <?php } elseif ( in_category('instrumentation')) { ?>
        <article id="post-<?php the_ID(); ?>" class="post col9 last">
          <div class="container portfolio">
            <h1>Portfolio - Instrumentation</h1>
            <img src="<?php bloginfo('template_url'); ?>/images/blueBarTop9col.jpg" width="800" height="32" alt="" />
            
            <div class="col4">
               <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" alt="<?php get_the_title(get_field('image')) ?>" /> 
               <h3>Seroba Kernel Contact:</h3>
               <a href="<?php the_field('seroba_kernel_contact_email'); ?>"><?php the_field('seroba_kernel_contact_name'); ?></a>
            </div>
            
            <div class="col8 last">
               <h2><?php the_title(); ?></h2>
               <?php the_content(); ?>
               <div class="container-related">
                  <p class="more-related">more</p>
                  <?php if(function_exists('echo_ald_crp')) echo_ald_crp(); ?>
               </div>
            </div>
          </div>    
      
      <?php } elseif ( in_category('medical-devices')) { ?>
        <article id="post-<?php the_ID(); ?>" class="post col9 last">
          <div class="container portfolio">
            <h1>Portfolio - Medical Devices</h1>
            <img src="<?php bloginfo('template_url'); ?>/images/blueBarTop9col.jpg" width="800" height="32" alt="" />
            
            <div class="col4">
               <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" alt="<?php get_the_title(get_field('image')) ?>" /> 
               <h3>Seroba Kernel Contact:</h3>
               <a href="<?php the_field('seroba_kernel_contact_email'); ?>"><?php the_field('seroba_kernel_contact_name'); ?></a>
               
            </div>
            
            <div class="col8 last">
               <h2><?php the_title(); ?></h2>
               <?php the_content(); ?>
               <div class="container-related">
                  <p class="more-related">more</p>
                  <?php if(function_exists('echo_ald_crp')) echo_ald_crp(); ?>
               </div>
            </div>
          </div>    
        
      <?php } elseif ( in_category('therapeutics')) { ?>
        <article id="post-<?php the_ID(); ?>" class="post col9 last">
          <div class="container portfolio">
            <h1>Portfolio - Therapeutics</h1>
            <img src="<?php bloginfo('template_url'); ?>/images/blueBarTop9col.jpg" width="800" height="32" alt="" />
            
            <div class="col4">
               <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" alt="<?php get_the_title(get_field('image')) ?>" /> 
               <h3>Seroba Kernel Contact:</h3>
               <a href="<?php the_field('seroba_kernel_contact_email'); ?>"><?php the_field('seroba_kernel_contact_name'); ?></a>
            </div>
            
            <div class="col8 last">
               <h2><?php the_title(); ?></h2>
               <?php the_content(); ?>
               <div class="container-related">
                  <p class="more-related">more</p>
                  <?php if(function_exists('echo_ald_crp')) echo_ald_crp(); ?>
               </div>
            </div>
          </div>  
        
      <?php } else {  ?>

        <article id="post-<?php the_ID(); ?>" class="post col9 last">
          <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <a class="clear" href="<?php bloginfo('url'); ?>">&lt; back to home page</a>
          </div>
          
      <?php }?>
      </article>
    <?php endwhile; endif; wp_reset_query();?>
    </div>
</div> <!-- content end -->

<?php get_footer(); ?>