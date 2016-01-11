<?php /* Template Name: Solutions Template*/ ?>

<?php get_header(); ?>
<main id="content-wrapper" class="solutions">
  <div class="splash-header">
    <div class="bg" style="background: url('<?php bloginfo('template_directory');?>/images/sunset-pic.jpg') 0% 0% no-repeat; background-size: cover;"></div>
    <div class="caption">
      <h3>Solutions</h3>
      <h3>For</h3>
      <h3>Your needs</h3>
    </div>
  </div>

  <div class="content">
    <?php get_template_part('content','solutions'); ?>   
  </div>
<!-- </main> is closed in footer.php -->
<?php get_footer(); ?>

