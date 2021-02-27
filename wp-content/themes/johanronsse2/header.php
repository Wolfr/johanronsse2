<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css?v=1.3">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/prism.css?v=1.3">

    <meta name="supported-color-schemes" content="light dark">

    <link rel="icon" media="(prefers-color-scheme:dark)"  href="<?php bloginfo('template_directory') ?>/favicon-i.ico" type="image/x-icon" id="dark-scheme-icon" />
    <link rel="icon" media="(prefers-color-scheme:light)" href="<?php bloginfo('template_directory') ?>/favicon.ico" type="image/x-icon" id="light-scheme-icon" />

    <script src="<?php bloginfo('template_directory') ?>/js/header-scripts.js"></script>

    <script type="text/javascript">
        matcher = window.matchMedia('(prefers-color-scheme: dark)');
        matcher.addListener(onFaviconUpdate);
        onFaviconUpdate();

        function onFaviconUpdate() {
            var lightSchemeIcon = document.querySelector('link#light-scheme-icon');
            var darkSchemeIcon = document.querySelector('link#dark-scheme-icon');
          if (matcher.matches) {
              document.head.append(darkSchemeIcon);
              lightSchemeIcon.remove();
          } else {
              document.head.append(lightSchemeIcon);
              darkSchemeIcon.remove();
          }
        }

    </script>

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
            <nav id="nav">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
        </div>
    </header>
