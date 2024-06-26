<div class="post">
    <span class="permalink">
        <div class="post-image">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?>
        </div>
    </span>

    <div class="post--content">
        <a href="<?php the_permalink(); ?>" class="permalink post-title front-page-post-title leading-7 font-bold text-2xl underline">
            <?php the_title(); ?>
        </a>

        <span class="article--meta">
            <span class="article--date"><b>Published:</b> <?php echo get_the_date(); ?></span>
            <span style="display: block;"><b>Tags:</b> <?php the_tags('<span class="tag">', '</span><span class="tag">', '</span>'); ?></span>
        </span>


    </div>

</div>