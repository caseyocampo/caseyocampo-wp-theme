<!-- This document displays a single blog post page -->

<?php
  get_header();
?>
    
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

  <div class="sidebar-2">
    <div class="sidebar-2-widgets">
  
      <?php
      dynamic_sidebar('sidebar-2');
      ?>

    </div>  
    <!-- /sidebar-widgets -->
  </div>
  <!-- /sidebar-2 -->
    
<?php
  get_footer();
?>