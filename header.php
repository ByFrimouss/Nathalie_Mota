<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <?php the_custom_logo(); ?>
        </div>
        <?php wp_nav_menu( array(
        'theme_location' => 'header-menu',
        'menu_class' => 'link-primary',
        'container_class' => 'menu',
        ) );
    ?>
    </nav>
</header>
