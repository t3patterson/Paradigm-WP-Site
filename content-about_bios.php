
<?php 
  //The WP_Query
    $args=[
      "post_type" => 'bio',
      "order"=>'ASC'
    ];

    $the_query = new WP_Query($args);
?>

<?php if ( have_posts() ){ 
      while( $the_query->have_posts() ){ 
        $the_query->the_post();
        $post_id = get_the_ID();
        $tn_id = get_post_thumbnail_id();
        $tn_img_url = wp_get_attachment_image_src($tn_id, 'thumbnail-size',true);
?>   

<div class="container-fluid content-block profiles">
  <div class="container">
      <div class="row">
        <h2><?php echo  get_the_title();?> / <span class="role"><?php echo get_post_meta($post_id, 'title_or_role', true);?></span></h2>  
        <div class="col-xs-12 col-sm-9">
            <?php echo get_post_meta($post_id, 'bio_description', true);?>
        </div>
        <div class="col-xs-12 col-sm-3">
          <div class="img-container"><img src="<?php echo $tn_img_url[0]; ?> " alt="<?php the_title(); ?>" ></div>
        </div>
      </div>
  </div>
</div>

<?php }} ?>  