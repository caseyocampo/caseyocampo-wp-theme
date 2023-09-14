<?php
/*
 * Template Name: Single Article
 * Template Post Type: post, page, product
 */
get_header();
?>

<!-- Single Page Image Widget -->
<?php
dynamic_sidebar('single-page-image-widget');
?>
<!-- /Single Page Image Widget -->

<main class="page" id="main-content">
    <div class="page--container">

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

        <div class="sidebar">
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