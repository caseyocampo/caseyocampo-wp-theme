<?php
get_header();
?>

<main class="page archive" id="main-content">
    <section class="page--container">
        <div class="page--content">

            <h1>Archive of <?php single_cat_title(); ?> Posts</h1>

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

            <?php
            the_posts_pagination(array(
                'screen_reader_text' => '',
                'title' => '',
            ));
            ?>

        </div>

        <!--
        <div class="sidebar">
          <div class="sidebar--right">

              <?php
                //dynamic_sidebar('sidebar-promo-area');
                ?>

          </div>
        </div>
        -->

    </section>
</main>

<?php
get_footer();
?>