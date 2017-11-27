<header>
    <!-- <div id="headwrap"> -->
        <!-- <a href="<?php echo home_url();?>"><?php bloginfo('name')?></a> -->
        <!-- <nav>
            <div class="menu">
                  <ul class='menuleft'>
                      <li>
                          <a href="#">Boende</a>
                      </li>
                      <li>
                          <a href="#">Konferens</a>
                      </li>
                      <li>
                          <a href="#">Kök &amp; Café</a>
                      </li>
                  </ul>
                  <ul class='menuright'>
                      <li>
                          <a href="#">Se &amp; Göra</a>
                      </li>
                      <li>
                          <a href="#">Qvarnen</a>
                      </li>
                      <li>
                          <a href="#">Kontakt</a>
                      </li>
                  </ul>
            </div>
            <?php //wp_nav_menu('header_nav'); ?>
        </nav> -->
    <!-- </div> -->
    <!-- <div id='logo'></div> -->

    <!-- 27 nov 2017 https://css-tricks.com/forums/topic/menu-split-by-logo/ -->
    <nav>
        <div class="menu">
            <?php wp_nav_menu( array('menu' => 'Main', 'container' => '', 'items_wrap' => '<ul class="menuleft">%3$s</ul>' )); ?>

                <a href="<?php echo home_url();?>"><div id='logo'></div></a>

            <?php wp_nav_menu( array('menu' => 'Secondary', 'container' => '', 'items_wrap' => '<ul class="menuright">%3$s</ul>' )); ?>
        </div>
    </nav>
</header>
