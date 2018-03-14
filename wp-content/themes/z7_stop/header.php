<!DOCTYPE html>
<html lang="ru">
   <head>
      <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

      <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      
      <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css">
      <link href="<?php bloginfo('template_url'); ?>/res/mobile.css" rel="stylesheet" type="text/css">
      
      <?php get_template_part('in/ico'); ?>

      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/res/styles_articles_tpl.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/res/highslide.min.css">

      
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/jquery.bxslider.js"></script>

      <script src="<?php bloginfo('template_url'); ?>/res/main.js"></script>
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/res/top_menu.css">
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/menu.css">
      <link href="<?php bloginfo('template_url'); ?>/res/style_bdr.scss.css" rel="stylesheet" type="text/css">
      
      <style type="text/css">.highslide img {cursor: url(/shared/highslide-4.1.13/graphics/zoomin.cur), pointer !important;}.highslide-viewport-size {position: fixed; width: 100%; height: 100%; left: 0; top: 0}</style>

      <script type="text/javascript" async="" id="onicon_bootstrap" src="<?php bloginfo('template_url'); ?>/res/bootstrap.min.js" charset="utf-8"></script>
      <? wp_head(); ?>
	   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5H2DSQ8');</script>
<!-- End Google Tag Manager -->
   </head>
   <body <?php body_class('pk'); ?>>	
	   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H2DSQ8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
      <div class="site-wrap">
         <div class="site-wrap-in">
            <header class="site-header">
               <div class="top-wr">
                  <div class="menu-btn"></div>

                  <?php get_template_part('in/menu'); ?>
                  <?php get_template_part('in/menu-new'); ?>


                  <div class="site-overlay"></div>
               </div>
               <div class="site-header-in contaner clear-self">
                  

                     <?php echo get_the_excerpt('187'); ?>
                  <div class="site-logo"><a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_url'); ?>/res/logo.png" alt=""></a></div>
               </div>
               <? if (is_front_page()) { ?>
               <div class="top-wrap">
                  
                  <?php get_template_part('in/front-top'); ?>
               </div><? } ?>
            </header>