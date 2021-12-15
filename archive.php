<!-- Not sure how to comment about this page. It should show the blog list page but I think since this is the exact same code for the index.php page, that the index.php page is given priority. -->
<?php
  get_header();
?>
    
  <section class="archive">
    <!-- <div class="archive-container"> -->
    <div class="page-container">
      <!-- <div class="archive-content"> -->
      <div class="page-content">
      <h1>
        <?php single_cat_title(); ?>
      </h1>
      <!-- <h1><?php the_tags('<span class="tag archive-tag">#', '</span><span class="tag archive-tag">#', '</span>'); ?></h1> -->

          <!-- gets post or page content -->
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
        <!-- /.archive-content -->

        <div class="sidebar">
          <div class="sidebar-widgets right-sidebar">

              <?php
              dynamic_sidebar('sidebar-promo-area');
              ?>

          </div>
          <!-- /.sidebar-widgets -->
        </div>
        <!-- /.sidebar -->
     
        
      </div>
    <!-- /.archive-container  -->
	  
  </section>
  <!-- /.archive -->

    
<?php
  get_footer();
?>