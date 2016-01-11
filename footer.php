  </main> 
   
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 company-logo">
          <?php if( dynamic_sidebar('front-left') ); ?>
        </div>
        <div class="col-sm-4 footer-nav">
          <?php if( dynamic_sidebar('front-center') ); ?>
        </div>
        <div class="col-sm-4 company-address">
          <?php if( dynamic_sidebar('front-right') ); ?>
        </div>
      </div>
    </div>
    
  </footer>

  <?php wp_footer();   ?>
   
</body>
</html>