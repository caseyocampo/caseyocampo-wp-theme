<?php
get_header();
?>

<main class="page archive" id="main-content">
    <div class="page--container">

        <!-- Homepage widget -->
        <?php
        dynamic_sidebar('homepage-widget');
        ?>
        <!-- /Homepage widget -->

        <div class="page--content">
            <h1 class="">Recent Posts <img src="https://www.caseyocampo.com/wp-content/uploads/2023/01/icon-blog.svg" alt="" class="icon-blog"></h1>

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
                'prev_text' => __('Previous page', 'textdomain'),
                'next_text' => __('Next page', 'textdomain'),
            ));
            ?>

        </div>
        <!-- /.page--content -->

        <!--
        <div class="sidebar">
          <div class="sidebar--right">

            <?php
            //dynamic_sidebar('sidebar-right');
            ?>

          </div>
        </div>
		-->

    </div>
    <!-- /page--container  -->
</main>

<?php
get_footer();
?>