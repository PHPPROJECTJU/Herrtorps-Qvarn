<footer>
  <div class='footercontainer'>

      <div class='footerobject'><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in magna molestie, lobortis risus et, viverra lacus. Sed ut turpis finibus, rhoncus massa quis. Lorem ipsum dolor sit amet, consectetur.</p></div>

      <div class='footerobject'><p>ipsum dolor sit amet, consectetur adipiscing elit. Nulla in magna molestie, lobortis risus et.</p></div>

      <div class='footerobject'>

         <?php echo do_shortcode( '[contact-form-7 id="617" title="Kontaktformulär 1"]' ); ?>

        <!-- <form method="POST" name="contactform" action="" class="footerform">

                <table>
                  <tr>
                    <h3>Kontakta oss</h3>
                  </tr>
                  <tr>
                    <td><input type="text" name="namn" placeholder="Namn" required></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="email" placeholder="Mailadress" required></td>
                  </tr>
                  <tr>
                    <td><textarea name="message" rows='5' placeholder="Meddelande"></textarea></td>
                  </tr>
                  <tr>
                    <td><input type="submit" name="submit" value="Skicka"></td>
                  </tr>
                </table>

        </form> -->
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
