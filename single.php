<?php
  get_header();
?>
    
<section class="page-page page-margin">
  <div class="page-container">

    <section class="single">

      <!-- gets post or page content -->
      <?php
      if (have_posts()) {
          while (have_posts()) {
            the_post();

            // gets template part from template-parts.php folder
            get_template_part('template-parts/content', 'article');
          }
        }
      ?>
        
    </section>
    <!-- /single -->

    <div class="sidebar">
        <div class="sidebar-widgets right-sidebar">

            <?php
            dynamic_sidebar('sidebar-promo-area');
            ?>

        </div>
        <!-- /sidebar-widgets -->
    </div>
    <!-- /sidebar -->

  </section>
</div>
    
<?php
  get_footer();
?>