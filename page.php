<!-- Page Template -->
<?php
get_header();
?>
<!-- /header -->

<div>
    <?php if (has_post_thumbnail()) : ?>
        <div style="background-image: url(' <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail_url();
                                            }
                                            ?>'); height: 175px; background-size: cover; background-position: center;" class="homepage-image"></div>
    <?php else : ?>
        <!-- No featured image -->
    <?php endif; ?>


    <main class="page page-main" id="main-content">
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

            <!--
        <div class="sidebar">
            <div class="sidebar--right">

                <?php
                // dynamic_sidebar('sidebar-right');
                ?>

            </div>
        </div>
        /sidebar -->

        </div>
        <!-- /page--container  -->
    </main>
    <!-- /page -->


    <?php
    get_footer();
    ?>