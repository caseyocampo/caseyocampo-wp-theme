<?php
get_header();
?>

<!-- Hero widget -->
<section id="hero-widget" class="flex items-center justify-center pt-20 lg:pt-40" style="background: var(--bg-color); color: var(--font-color)">
    <div class="w-[72rem] max-w-6xl">
        <?php
        dynamic_sidebar('homepage-widget');
        ?>
    </div>
</section>


<main class="page archive" id="main-content" style="padding-top: 0 !important;">
    <div class="page--container">
        <section id="front-page">
            <h2 class="h3 tracking-tighter">Categories</h2>

            <div class="tagcloud">
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<a href="' . get_category_link($category->term_id) . '" class="tag-cloud-link">' . $category->name . '</a>';
                }
                ?>
            </div>
        </section>

        <div class="page--content">
            <h2 class="h1 tracking-tighter" style="margin-bottom: 1em;">Recent Posts</h2>

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
    </div>
</main>

<?php
get_footer();
?>