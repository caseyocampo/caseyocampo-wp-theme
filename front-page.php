<?php
    get_header();
?>
    <section class="page-page archive front-page">
      <div class="page-container">
        <div class="page-content">
		  <h1>Latest Posts</h1>

        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    // gets template part from template-parts.php folder
                    get_template_part('template-parts/content', 'archive');
                }
            }
        ?>
		  
		  <?php
                the_posts_pagination(array(
					'screen_reader_text' => '',
					'title' => '',
					));
            ?>
		 
        </div>
        <!-- /.page-content -->

        <div class="sidebar">
          <div class="sidebar-widgets right-sidebar">

              <?php
              dynamic_sidebar('sidebar-bio-area');
              ?>

          </div>
          <!-- /sidebar-widgets -->
        </div>
        <!-- /sidebar -->
	
        </div>
        <!-- /page-container  -->
    </section>
    <!-- /page-page -->


   

<?php
    get_footer();
?>