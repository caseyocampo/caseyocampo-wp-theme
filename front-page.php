<?php
  get_header();
?>
<!-- /header -->

    <section>
        <h1>Front Page</h1>
        
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 
        ?>

        <h1>
          <?php the_title(); ?>
        </h1>

        <!-- gets post or page content -->
        <?php
          if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
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
        