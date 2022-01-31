<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="home-header">
        <div class="head-content">
            <div class="header-title">
                <a href="<?php echo home_url();?>"><?php bloginfo('name')?></a>
            </div>
            <div class="hamburger" id="js-navbar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <nav class="header-mob-menu">
                <?php wp_nav_menu(array(
                    'theme_location' =>
                    'mainmenu'
                )); ?>
            </nav>
        </div>
</header>