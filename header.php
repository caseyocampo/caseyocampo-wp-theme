<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"
      type="text/javascript"
    ></script>

    <?php
      wp_head();
    ?>
  </head>
  <body>
    <header>
      <nav>
        <?php
          if (function_exists('the_custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
          }
          ?>
        <a href="/"><img src="<?php echo $logo[0] ?>" alt="Site Logo" class="nav--logo" /></a>
        <a href="/" class="nav--title"><?php echo get_bloginfo( 'name' ); ?></a>
        <p class="nav--tagline"><?php echo get_option('blogdescription'); ?></p>

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

        <button id="nav-btn">
	        <i class="fas fa-bars toggle-nav" onclick="toggleNav()"></i>
        </button>
      </nav>
    </header>