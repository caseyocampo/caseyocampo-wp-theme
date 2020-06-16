<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php the_title(); ?> | Connor's Blog</title>
    <link rel="shortcut icon" href="./images/favicon.png" />
   
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
        <a href="/" class="color-white site-title"
          >Connor Ocampo</a
        >
        <!-- <ul id="nav" class="nav-links">
          <li>
            <a href="/front-page.html" class="nav-link">Home</a>
          </li>
          <li>
            <a href="/archive.html" class="nav-link">Blog</a>
          </li>
          <li>
            <a href="/single.html" class="nav-link">Single Page</a>
          </li>
          <li>
            <a href="/page.html" class="nav-link">Page</a>
          </li>
        </ul> -->

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

