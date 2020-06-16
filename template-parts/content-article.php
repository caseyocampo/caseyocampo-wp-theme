    <h1>Content Article</h1>
    
    <div class="post">
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 
        ?>

        <h2>
            <?php the_title(); ?>
        </h2>
        <span class="date"><?php the_date(); ?></span>
        
        <?php the_tags('<span class="tag"><i class="fas fa-tag"></i>', '</span><span class="tag"><i class="fas fa-tag"></i>', '</span>'); ?>

        <?php
            the_content();
        ?>
    </div>
    <!-- /post -->