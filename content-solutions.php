<?php 
     
    $this_pg_title = get_page_by_title('Solutions');  
    $this_pg_pmaLnk = get_permalink($this_pg_title);
    
    $args = [
      'post_type'=> 'content-block',
      'orderby' => 'title',
      'order' => 'ASC'
    ];

    $wp_query = new WP_Query($args);
?>

   <?php 
     if (  have_posts() ){
        while ( $wp_query -> have_posts() ) {
          $wp_query -> the_post();
          $post_id = get_the_ID();
          $tn_id = get_post_thumbnail_id();        
          $tn_url = wp_get_attachment_image_src($tn_id, 'thumbnail-size',true);
          $post_id = get_the_ID();

    ?>
    
    <?php 
       $the_pageType_pmaLnk = get_field('page_type'); 
       if ( $the_pageType_pmaLnk == $this_pg_pmaLnk ){ ?> 
        <div class="container-fluid content-block">
          <div class="container">
            <div class="row">
              <h2><?php echo get_post_meta($post_id, 'content_title',true); ?></h2>  
              <div class="col-xs-12">
                <?php the_content(); ?>
              </div>
              
            </div>
          </div>
        </div>
      <?php   } ?>
      
     <?php }}  ?>