<button onclick="topFunction()" id="scrollToTop" title="Go to top">Top</button>

<div class="sidebar-2">
	<div class="sidebar-2-widgets">

		<?php
		dynamic_sidebar('sidebar-2');
		?>

	</div>  
	<!-- /  -->
</div>
<!-- /sidebar-2 -->

<footer>
      <div class="footer--content">
        <div class="widgets">
        <?php
            dynamic_sidebar('footer-1');
            ?>
        </div>
        <!-- /widgets  -->
      </div>
      <!-- /footer--content -->
      <p class="footer--credit">
        <?php echo get_bloginfo( 'name' ); ?> © <?php echo date('Y'); ?>.
      </p>
    </footer>


    <?php
    wp_footer();
  ?>
  </body>
</html>