  <div class="container">
    <h2>Our Team</h2>
    <div class="row">
      
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
        <div class="col-xs-12 col-sm-4">
          
          <div class="flip-card">
            <div class="card-side side-a">
              <img src="<?php echo $tn_img_url[0]; ?> " alt="<?php the_title(); ?>" >
            </div>
            <div class="card-side side-b">
              <h4><?php echo get_post_meta($post_id, 'title_or_role', true); ?> </h4>
            </div>
          </div>
          <div class="card-label">
            <h3><?php echo  get_the_title();  ?></h3>
            <p><?php echo get_post_meta($post_id, 'title_or_role', true); ?></p>
          </div>
        </div>
       
        <?php }} ?>
    </div>
  </div>
  