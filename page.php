<!-- Page Template -->
<?php
    get_header();
?>
<!-- /header -->

    <section class="page page--margin">
      <div class="page--container">

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
            <div class="sidebar--right">

                <?php
                dynamic_sidebar('sidebar-right');
                ?>

            </div>
            <!-- /  -->
        </div>
        <!-- /sidebar -->

        </div>
        <!-- /page--container  -->
    </section>
    <!-- /page -->


<?php
    get_footer();
?>