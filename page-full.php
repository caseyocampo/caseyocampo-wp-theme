<?php
/*
Template Name: Full Width Template
*/
?>

<?php
get_header();
?>

<section class="page page--margin">
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
</section>

<?php
get_footer();
?>