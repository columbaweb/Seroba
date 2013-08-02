<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]>  <html class="no-js" <?php language_attributes(); ?>> <![endif]-->

<html lang="en-GB" class="no-js">
<head>
<title><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<!--[if lt IE 9]>
   <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie.css" />
<![endif]--> 


<?php wp_enqueue_script('modernizr', get_stylesheet_directory_uri() .'/js/modernizr.js');?>
<?php wp_head(); ?>

<script>
jQuery('.container-related p.more-related').each(function(){ 
jQuery('.container-related div').css("height", jQuery('.container-related div').height()+"px");                                 
});

jQuery(function () {
   jQuery('.container-related div').hide();
   jQuery('.container-related p.more-related').click(function() {
      jQuery('.container-related div').slideToggle('slow');
      jQuery(this).toggleClass("active"); 
      return false;
   });	
});
</script>
</head>  

<body <?php body_class(); ?>>
   <div id="wrap">   <!-- wrap start   -->
      <header>
         <div class="row">
            <nav class="col12">
               <?php wp_nav_menu(); ?>
            </nav> 
         </div>  
         
         <div class="row">
            <div id="logo" class="col6">
               <a href="<?php echo home_url(); ?>" ><img src="<?php bloginfo('template_url'); ?>/images/skLogo.png" width="266" height="46" alt="Sebora Kernel" /></a>
            </div>
            
            <div id="serachlogin" class="col6 last">
               <div class="log-in">
                  <a class="log-in" href="http://seroba-kernel.com/partners/">Limited Partner Zone</a>
               </div>
               <div class="search">
                  <?php include ('searchform.php'); ?>
               </div>
            </div>
          </div>
      </header>