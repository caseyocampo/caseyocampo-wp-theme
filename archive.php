<!-- Not sure how to comment about this page. It should show the blog list page but I think since this is the exact same code for the index.php page, that the index.php page is given priority. -->

<?php
  get_header();
?>
    
  <section class="archive">
    <div class="archive-container">
      <h1>Thoughts</h1>

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
  </section>
  <!-- /archive -->

    
<?php
  get_footer();
?>