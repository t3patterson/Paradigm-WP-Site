<?php get_header(); ?>
  <main id="content-wrapper" class="front-page">

  <?php get_template_part('component','splash_carousel') ?>
       
  <nav class="on-page-nav">
     <?php 
       $args=[
         'theme_location' => 'landing',
         'menu_class' => 'nav navbar-nav',
         'container' => 'false'
       ];
       wp_nav_menu($args)
     ?>
  </nav>
  
  <div class="landing-content">
    <?php get_template_part('content','landing') ?>   
  </div>
  
  <div class="our-team">
    <?php get_template_part('component','flip_card_profiles'); ?>
  </div>


<!-- </main> is closed in footer.php -->
<?php get_footer(); ?>
    