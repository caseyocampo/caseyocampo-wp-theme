<article class="article">
	<div class="post-image">
		<h1><?php the_title(); ?></h1>

		<span class="featured--image">
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} 
			?>
		</span>
	</div>
	
	<span class="article--meta">
		<span class="article--date"><?php echo get_the_date(); ?> | </span><?php the_tags('<span class="tag">', '</span><span class="tag">', '</span>'); ?>
	</span>

	<?php 
		the_content(); 
	?>

	<?php
	// next/prev. post
	the_post_navigation( array(
		'prev_text' =>
			'<i class="fas fa-arrow-left"></i>' .
			'<span class="screen-reader-text"> Previous post</span> ' .
			'<br /> ' .
			'<span class="post-title" style="font-weight: bold;"> %title</span>',
		'next_text' => 
			'<span class="screen-reader-text">Next post </span> ' .
			'<i class="fas fa-arrow-right"></i>' .
			'<br /> ' .
			'<span class="post-title" style="font-weight: bold;">%title </span>' ,
	) );
	?>
	
	<div class="share-post">
		<p class="share-post-text">share</p>
		<button onclick="sendMail(); return false" class="share-button">
			<i class="fa fa-envelope-o share-icon"></i>
		</button>
	</div>

</article>