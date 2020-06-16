<?php
    get_header();
?>
<!-- /header -->

    <section>

        <h1>Page</h1>

        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    // gets template part from template-parts.php folder
                    get_template_part('template-parts/content', 'page');
                }
            }
        ?>
    </section>

    <section class="sidebar"> 
        <h1>Sidebar</h1>

        <?php
          dynamic_sidebar('sidebar-1');
        ?>

    </section>


<?php
    get_footer();
?>