<?php
/*
 * Template Name: Featured Page
 * Template Post Type: post, page, product
 */

get_header();
?>

<main class="page" id="main-content">
    <div class="" id="single-post">

        <section class="single">

            <!-- gets post or page content -->
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    // gets template part from template-parts.php folder
                    get_template_part('template-parts/content', 'single-page');
                }
            }
            ?>

        </section>
        <!-- /single -->

        <div class="single-post-sidebar">
            <div class="sidebar--right">

                <?php
                dynamic_sidebar('sidebar-promo-area');
                ?>

            </div>
            <!-- /  -->
        </div>
        <!-- /sidebar -->

    </div>
</main>


<?php
get_footer();
?>