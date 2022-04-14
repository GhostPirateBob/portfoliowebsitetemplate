<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Foundation 6 Wordpress theme">
    <meta name="keywords" content="Foundation 6, Wordpress">
    <meta name="author" content="D.C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_title('', false); ?>
    <?php wp_head(); ?>
</head>

<body>

    <a class="hide" href="#main" accesskey="S"> Skip navigation </a>

    <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">

        <button aria-label="Menu" class="menu-icon" type="button" data-toggle="responsive-menu">

            <span class="hide">
                Menu
            </span>

        </button>

        <div class="title-bar-title">
            Menu
        </div>

    </div>

    <header class="top-bar" id="responsive-menu">

        <div class="top-bar-left show-for-medium">    

            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                
            if ( has_custom_logo() ) {
                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
                echo get_bloginfo('name');
            }
            ?>
        
        </div>

        <nav  class="grid-x top-bar-right">

            <?php

            include get_template_directory() . '/inc/walker.php';
            
            wp_nav_menu(array(
                'menu' => 'Main Navigation',
                'menu_class' => 'cell text-center vertical medium-horizontal dropdown menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                'walker' => new F6_TOPBAR_MENU_WALKER(),
                'container' => false,
            ));
            ?>

        </nav>

    </header>