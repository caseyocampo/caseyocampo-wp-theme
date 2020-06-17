<div class="page-content">

    <h1>
        <?php the_title(); ?>
    </h1>

    <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 
        ?>
    
    <?php
       the_content();
    ?>
 
</div>