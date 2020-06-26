<!-- This document displays a single page -->

<?php
    get_header();
?>
<!-- /header -->

    <section class="page-page">
      <div class="page-container">

        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    // gets template part from template-parts.php folder
                    get_template_part('template-parts/content', 'page');
                }
            }
        ?>

        <div class="sidebar">
            <div class="sidebar-widgets">

                <?php
                dynamic_sidebar('sidebar-1');
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