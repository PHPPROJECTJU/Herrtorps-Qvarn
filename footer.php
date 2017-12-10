<footer>
  <div class='footercontainer'>

      <div class='footerobject'><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in magna molestie, lobortis risus et, viverra lacus. Sed ut turpis finibus, rhoncus massa quis. Lorem ipsum dolor sit amet, consectetur.</p></div>

      <div class='footerobject'><p>ipsum dolor sit amet, consectetur adipiscing elit. Nulla in magna molestie, lobortis risus et.</p></div>

      <div class='footerobject'>
        
         <?php echo do_shortcode( '[contact-form-7 id="617" title="Kontaktformulär 1"]' ); ?>

      </div>

  </div>


<?php
$src = get_template_directory_uri() . "/javascript/menu.js";
?>

  <script type="text/javascript" src="<?php echo $src;?>"</script>


</footer>
<div id='blackfooter'>
    <p>©The golden shower trio <?php echo date(Y); ?></p>
</div>

<?php wp_footer() ?>
</body>
</html>
