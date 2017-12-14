<footer>
  <div class='footercontainer'>

      <div class='footerobject'>
        <p>

          <?php
          if (get_locale() == 'sv_SE') {
            dynamic_sidebar('footer-1');
          } else {
            dynamic_sidebar('footer-2');
          }
          ?>
        </p>
      </div>

      <div class='footerobject'>
        <p>
          <?php
          if (get_locale() == 'sv_SE') {
            dynamic_sidebar('footer-3');
          } else {
            dynamic_sidebar('footer-4');
          }
          ?>
        </p>
        <a target ='_blank' href='https://www.facebook.com/HerrtorpsQvarn'><span id='fb_logo'></span></a>
        <div class="line_beige"></div>
      </div>


      <div class='footerobject'>
        <div id='footerform'>

          <?php
          if (get_locale() == 'en_GB') {
              echo do_shortcode( '[contact-form-7 id="725" title="Kontaktformulär 2 - ENGLISH"]' );
          } else{
              echo do_shortcode( '[contact-form-7 id="617" title="Kontaktformulär 2"]' );
          }
          ?>
       </div>
      </div>

  </div>


<?php
$src = get_template_directory_uri() . "/javascript/menu.js";
$src2 = get_template_directory_uri() . "/javascript/flexibility.js";

?>

  <script type="text/javascript" src="<?php echo $src;?>"></script>
  <script type="text/javascript" src="<?php echo $src2;?>"></script>
<!-- [if IE]> <script type="text/javascript"> flexibility(document.body); </script> <![endif] -->


</footer>
<div id='blackfooter'>
    <p>© Herrtorps Qvarn <?php echo date(Y); ?></p>
</div>

<?php wp_footer() ?>
</body>
</html>
