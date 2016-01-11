<?php /* Template Name: About-Pg Template*/ ?>

<?php get_header(); ?>
<main id="content-wrapper" class="about">
  <div class="splash-header">
    <div class="bg" style="background: url('<?php bloginfo('template_directory');?>/images/electric-posts.jpg') 0% 0% no-repeat; background-size: cover;"></div>
    <div class="caption">
      <h2>Who We Are</h2>
      <h4>Meet Our Team</h4>
    </div>
  </div>

  <nav class="on-page-nav">
     <?php 
       $args=[
         'theme_location' => 'about',
         'menu_class' => 'nav navbar-nav',
         'container' => 'false'
       ];
       wp_nav_menu($args)
     ?>
  </nav>

  <div class="about-content">
    <?php get_template_part('content','about'); ?>   
    <?php get_template_part('content', 'about_bios'); ?>
  </div>
<!-- </main> is closed in footer.php -->
<?php get_footer(); ?>

