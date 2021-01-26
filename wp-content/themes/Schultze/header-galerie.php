<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/logo-final.png" type="image/x-icon" />
    <title>
    <?php bloginfo('name'); ?> |
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <header  class="galerie-header" >
        <nav>
        <?php 
                wp_nav_menu( array(
                'theme_location'    => 'primary',
                'container'         => false,
                'menu_class'        => 'menu desktop first-navbar',
                ) );
            ?>
            <a class="logo-link" href="<?php the_field('hone','option'); ?>">
                <img src="<?php echo get_template_directory_uri();?>/img/logo-final.png" alt="logo" class="logo">
            </a>
            <?php 
                wp_nav_menu( array(
                'theme_location'    => 'secondary',
                'container'         => false,
                'menu_class'        => 'menu desktop last-navbar',
    
                ) );
            ?>
        
        </nav>
        <nav class="nav-mobile">
                <img src="<?php echo get_template_directory_uri();?>/img/logo-mobile.png" alt="mobile-logo" class="mobile-logo">
            <div class="burger-mobile">
                <div class="icon"></div>
            </div>
            <?php 
                wp_nav_menu( array(
                'theme_location'    => 'mobile-nav',
                'container'         => false,
                'menu_class'        => 'mobile menu_nav',
                'menu_id'           => 'menu',
                ) );
            ?>
        </nav>
    </header>