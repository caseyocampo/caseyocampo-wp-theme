<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

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

    <meta property="og:type" content="article">
    <link href="wp-content/themes/caseyocampo-wp-theme/src/output.css" rel="stylesheet">

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

            <a href=" /" class="nav--title"><?php echo get_bloginfo('name'); ?></a>
            <p class="nav--tagline"><?php echo get_option('blogdescription'); ?></p>

            <div class="right-nav">
                <button id="nav-btn" aria-label="primary menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                        <path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z"></path>
                    </svg>
                </button>

                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Primary',
                        'container' => '',
                        'theme_location' => 'Primary',
                        'items_wrap' => '<ul id="nav" class="nav-links"><div class=" theme-switch-container">
                        <label class="theme-switch" for="checkboxToggle">Dark Mode</label>
                        <input type="checkbox" id="checkboxToggle" />
                        <span class="toggle-divider">|</span>
                    </div>%3$s</ul>'
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