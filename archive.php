<?php
  get_header();
?>
    
    <section>

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
        
    </section>

    <section>
    <h1>Sidebar</h1>

      <?php
        dynamic_sidebar('sidebar-1');
      ?>

    </section>

    
<?php
  get_footer();
?>