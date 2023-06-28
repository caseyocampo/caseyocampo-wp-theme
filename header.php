<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <meta name="google-site-verification" content="yTzqIHzTSkyUeSxm_fpADrUVk9EacY5p-nVKfdlRTp4" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-217821750-1"> </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-217821750-1');
    </script>

    <meta property="og:title" content="Casey Ocampo's Website">
    <meta property="og:description" content="Personal blog.">
    <meta property="og:url" content="https://www.caseyocampo.com/">
    <meta property="og:image" content="https://www.caseyocampo.com/wp-content/uploads/2022/05/about.jpg">
    <meta property="og:type" content="article">

    <?php
    wp_head();
    ?>
</head>

<body>
    <header>
        <div class="visually-hidden">
            <a href="#main-content" class="skip-link">Skip to main content</a>
        </div>
        <nav>


            <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>

            <a href="/" class="nav--title"><?php echo get_bloginfo('name'); ?></a>
            <p class="nav--tagline"><?php echo get_option('blogdescription'); ?></p>

            <div class="right-nav">
                <button id="nav-btn" aria-label="primary menu">
                    <p id="nav-icon">Menu</p>
                </button>
                <div class="theme-switch-container">
                    <label class="theme-switch" for="checkboxToggle">Toggle Theme</label>
                    <input type="checkbox" id="checkboxToggle" />
                    <span class="toggle-divider">|</span>
                </div>


                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Primary',
                        'container' => '',
                        'theme_location' => 'Primary',
                        'items_wrap' => '<ul id="nav" class="nav-links">%3$s</ul>'
                    )
                );
                ?>
        </nav>
        </div>
    </header>

    <?php if (!is_home()) : ?>
        <div class="breadcrumbs-container">
            <div class="breadcrumb">
                <?php get_breadcrumb(); ?>
            </div>
        </div>
    <?php endif; ?>