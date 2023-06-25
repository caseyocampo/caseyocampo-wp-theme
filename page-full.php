<?php
/*
Template Name: Full Width Template
*/
?>

<?php
get_header();
?>

<main class="page">
    <div class="page--container">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                // gets template part from template-parts.php folder
                get_template_part('template-parts/content', 'page-full');
            }
        }
        ?>
    </div>
</main>

<?php
get_footer();
?>