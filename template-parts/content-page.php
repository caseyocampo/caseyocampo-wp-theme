<div class="page--content">

    <h1>
        <?php the_title(); ?>
    </h1>

    <span class="page--featured-image">
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 
        ?>
    </span>

    <?php
       the_content();
    ?>
 
</div>