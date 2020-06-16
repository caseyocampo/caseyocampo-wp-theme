<article class="single-container">
    <span class="post-image">
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 
        ?>
      </span>
        <h1><?php the_title(); ?></h1>
        <span class="post-meta">
        <span class="date"><?php the_date(); ?></span><?php the_tags('<span class="tag">#', '</span><span class="tag">', '</span>'); ?>
        </span>
        <?php
            the_content();
        ?>
        <span class="post-credit">— Connor Ocampo</span>


        <div class="share-post">
          <p class="share-post-text">share</p>
          <button onclick="sendMail(); return false" class="share-button">
            <i class="fa fa-envelope-o share-icon"></i>
          </button>
        </div>
        <!-- /share-post -->
      </article>
      <!-- /single-container -->