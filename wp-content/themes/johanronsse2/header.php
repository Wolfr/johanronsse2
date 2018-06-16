<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
    <script src="<?php bloginfo('template_directory') ?>/js/scripts.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="header" class="section">
        <div class="inner">
            <div id="branding">
                <a href="/">
                    <h1>Johan Ronsse</h1>
                </a>
            </div>
            <nav id="nav" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
        </div>
    </header>
