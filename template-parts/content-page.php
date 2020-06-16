<h1>Content Page</h1>

<section>

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
 
</section>