<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php the_title(); ?> | Connor's Blog</title>
    <link rel="shortcut icon" href="/wp-content/themes/dotcom/assets/images/favicon.png" />
   
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
        <a href="/" class="site-title"
          >Connor Ocampo</a
        >

        <?php
            wp_nav_menu(
              array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="nav" class="nav-links">%3$s</ul>'
              )
            );
        ?>

        <button id="nav-btn">
          <i class="fas fa-ellipsis-v toggle-nav" onclick="toggleNav()"></i>
        </button>
      </nav>
    </header>
    <!-- /header -->

