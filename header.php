<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#ffffff">
    <meta property="og:type" content="article">
    <meta name="description" content="Casey Ocampo's blog.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <?php
    wp_head();
    ?>
</head>

<body>
    <header>
        <div class="visually-hidden">
            <a href="#main-content" class="skip-link">Skip to main content</a>
        </div>
        <nav class="pt-4">
            <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>

            <a href="/" class="text-zinc-950 text-3xl font-bold mr-4 min-w-52 tracking-tighter md:text-4xl"><?php echo get_bloginfo('name'); ?></a>
            <p class="hidden"><?php echo get_option('blogdescription'); ?></p>

            <div class="flex baseline min-w-full flex-col sm:flex-row xl:min-w-fit">
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
                        'items_wrap' => '<ul id="nav" class="nav-links"><li class="theme-switch-container mr-0 ">
                        <label class="theme-switch" for="checkboxToggle">Dark Mode</label>
                        <input type="checkbox" id="checkboxToggle" class="mr-6" />
                        <span class="toggle-divider">|</span>
                    </li>%3$s</ul>'
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