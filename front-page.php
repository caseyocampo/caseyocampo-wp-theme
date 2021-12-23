<?php
    get_header();
?>

    <section class="page archive">
      <div class="page--container">
        <div class="page--content">
		  <h1>Recent Posts</h1>

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
        <!-- /.page--content -->

        <div class="sidebar">
          <div class="sidebar--right">

            <?php
                dynamic_sidebar('sidebar-right');
            ?>

          </div>
        </div>
	
        </div>
        <!-- /page--container  -->
    </section>

<?php
    get_footer();
?>