<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"
      type="text/javascript"
    ></script>
	  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LM3MK2QT5Y"></script>
	  
	  <script data-ad-client="ca-pub-2432884557339666" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	  <!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-P3Q8QLB');</script>
		<!-- End Google Tag Manager -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LM3MK2QT5Y');
</script>
	  
    <?php
      wp_head();
    ?>
  </head>
  <body>
	  <!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3Q8QLB"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
    <header>
      <nav>
        <?php
          if (function_exists('the_custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
          }
          ?>
        <a href="/"><img src="<?php echo $logo[0] ?>" alt="Owner Income Logo" class="site-logo" id="site-logo" /></a>

        <a href="/" class="site-title"><?php echo get_bloginfo( 'name' ); ?></a>
        <p class="php-tagline"><?php echo get_option('blogdescription'); ?></p>

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