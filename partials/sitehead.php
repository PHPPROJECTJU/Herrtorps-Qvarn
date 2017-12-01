<header>
    <!-- 27 nov 2017 https://css-tricks.com/forums/topic/menu-split-by-logo/ -->
    <nav>
        <div class="menu">
            <?php wp_nav_menu( array('menu' => 'Menu left', 'container' => '', 'items_wrap' => '<ul class="menuleft">%3$s</ul>' )); ?>

                <a href="<?php echo home_url();?>"><div id='logo'></div></a>

            <?php wp_nav_menu( array('menu' => 'Menu right', 'container' => '', 'items_wrap' => '<ul class="menuright">%3$s</ul>' )); ?>
            <div class="extras">
                <a href="/opening-hours">
                    <div class="opening-icon">
                    </div>
                </a>
                <div class="language-icon">
                    <a href="language-hours"></a>
                </div>
            </div>
            <div id="hamburger" onclick="openNav(this)" title="Menu">&#9776;</div>
        </div>

    </nav>

</header>
