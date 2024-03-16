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

    <!-- Google Tag Manager and Analytics tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0V4CSP11R7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-0V4CSP11R7');
        gtag('config', 'G-N2A3FMNDT5');
        gtag('set', {
            cookie_flags: 'SameSite=None;Secure'
        });
    </script>

    <?php
    wp_head();
    ?>
</head>

<body>
    <header class="flex items-center justify-center py-0 px-4 lg:py-4" style="background-color: var(--bg-color); border-bottom: 1px solid var(--border-color);">
        <div class="visually-hidden">
            <a href="#main-content" class="skip-link">Skip to main content</a>
        </div>
        <nav class="flex flex-col justify-between w-[72rem] max-w-6xl my-4 xl:flex-row lg:mb-0 lg:mt-0 xl:mb-0">
            <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>

            <a href="/" class="place-self-start text-zinc-950 text-3xl font-bold mr-4 min-w-60 tracking-tighter md:text-4xl"><?php echo get_bloginfo('name'); ?></a>
            <p class="hidden"><?php echo get_option('blogdescription'); ?></p>

            <div class="flex baseline min-w-full flex-col sm:flex-row xl:min-w-fit">
                <button id="nav-btn" aria-label="primary menu" aria-expanded="false" class="absolute right-5 top-[16px] cursor-pointer text-2xl p-2 xl:hidden" style="background: var(---bg-color); border: 1px solid var(--font-color);border-radius: var(--border-radius);color: var(--font-color);">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                        <path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z"></path>
                    </svg>
                </button>

                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Primary',
                        'container' => '',
                        'theme_location' => 'Primary',
                        'items_wrap' => '<ul id="nav" class="flex items-start flex-col list-none w-full lg:flex-row lg:items-center">
                        <li class="mr-0 text-base font-light py-4 xl:py-0 xl:mx-4" style="color: var(--header-link-color);">
                        <label class="theme-switch" for="checkboxToggle">Dark Mode</label>
                        <input type="checkbox" id="checkboxToggle" class="mr-6" />
                        <span class="hidden xl:inline-block">|</span>
                    </li>%3$s</ul>'
                    )
                );
                ?>

        </nav>
        </div>
    </header>

    <?php if (!is_home()) : ?>
        <div class="flex items-center justify-center px-4" style="background: var(--bg-color); border-bottom: 1px solid var(--border-color); color: var(--font-color)">
            <div id="breadcrumb" class="flex items-center py-2 w-[72rem] max-w-6xl">
                <?php get_breadcrumb(); ?>
            </div>
        </div>
    <?php endif; ?>