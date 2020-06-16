<div class="page-content">

    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        } 
    ?>
    

    <h1>
        <?php the_title(); ?>
    </h1>
    
    <?php
       the_content();
    ?>
 
</div>