<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */

get_header();
?>
<!--
<div class="full-width-image" style="background-image: url('<?= filter_var(the_post_thumbnail_url(), FILTER_SANITIZE_URL);  ?>')"></div>
-->


<main class="page" id="main-content">
    <div class="" id="single-post">

        <section class="single">

            <!-- gets post or page content -->
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    // gets template part from template-parts.php folder
                    get_template_part('template-parts/content', 'single-post');
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