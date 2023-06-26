<article class="article">
    <div class="post-image">
        <h1><?php the_title(); ?></h1>

        <div>
            <span class="featured--image">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                }
                ?>
            </span>
            <span class="article--meta">
                <span class="article--date"><b>Published:</b> <?php echo get_the_date(); ?></span>
                <span><b>Tags:</b> <?php the_tags('<span class="tag">', '</span><span class="tag">', '</span>'); ?></span>
            </span>
        </div>
    </div>

    <?php
    the_content();
    ?>

    <?php
    the_post_navigation(array(
        'prev_text' =>
        '<i class="fas fa-arrow-left" alt=""></i>' .
            '<span class="screen-reader-text"> Previous post</span> ' .
            '<br /> ' .
            '<span class="post-title post-title-nav" style="font-weight: bold;"> %title</span>',
        'next_text' =>
        '<span class="screen-reader-text">Next post </span> ' .
            '<i class="fas fa-arrow-right" alt=""></i>' .
            '<br /> ' .
            '<span class="post-title post-title-nav" style="font-weight: bold;">%title </span>',
    ));
    ?>

</article>