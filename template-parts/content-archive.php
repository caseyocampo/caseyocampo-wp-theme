<div class="post">

    <a href="#" class="permalink">
      <img
        src="https://placekitten.com/300/250"
        alt=""
        class="post-image"
      />
    </a>
    <div class="post-content">
      <a href="<?php the_permalink(); ?>" class="permalink">
        <h2><?php the_title(); ?></h2>
      </a>
      <span class="post-meta">
        <span class="date"><?php the_date(); ?></span
        ><?php the_tags('<span class="tag">#', '</span><span class="tag">', '</span>'); ?></span
      >

      
      <span class="excerpt">
      <?php
          the_excerpt();
      ?>
      </span>
      <a href="<?php the_permalink(); ?>" class="permalink read-more">Read More</a>
    </div>

</div>
<!-- /post -->
