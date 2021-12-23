<?php
    get_header();
?>

    <section class="archive">
      <div class="archive-container">
        <h1>Thoughts</h1>

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
                the_posts_pagination();
            ?>

            
        </div>
    </section>

    <div class="sidebar--footer">
        <div class="sidebar--footer--widgets">

            <?php
                dynamic_sidebar('sidebar-footer');
            ?>

        </div>  
    </div>

<?php
  get_footer();
?>