<button onclick="topFunction()" id="scrollToTop" title="Go to top">Top</button>

<div class="sidebar--footer">
	<div class="sidebar--footer--widgets">

		<?php
		  dynamic_sidebar('sidebar-footer');
		?>

	</div>  
</div>

  <footer>
    <div class="footer--content">
      <div class="widgets">
        <?php
          dynamic_sidebar('footer-widget-area');
        ?>
      </div>
    </div>

    <p class="footer--credit">
      <?php echo get_bloginfo( 'name' ); ?> © <?php echo date('Y'); ?>.
    </p>
  </footer>


  <?php
    wp_footer();
  ?>
  </body>
</html>