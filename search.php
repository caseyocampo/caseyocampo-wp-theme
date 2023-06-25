<?php
  get_header();
?>
    
    <main class="archive">
      <div class="archive-container">
        <h1>Search Results</h1>

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
        
        </div>
      <!-- /archive-container  -->
    </main>
    <!-- /archive -->

    
<?php
  get_footer();
?>