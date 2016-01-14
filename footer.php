  </main> 
   
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 company-logo">
          <?php if( dynamic_sidebar('front-left') ); ?>
        </div>
        <div class="col-sm-6 footer-nav">
          <?php if( dynamic_sidebar('front-center') ); ?>
        </div>
        <div class="col-sm-3 company-address">
          <?php if (dynamic_sidebar('company-address') ) ?>

        </div>
      </div>
    </div>
    
  </footer>

  <?php wp_footer();   ?>
   
</body>
</html>