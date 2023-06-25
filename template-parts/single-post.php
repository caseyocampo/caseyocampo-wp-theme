<article class="article">
	<div class="post-image">
	    <p>Single article</p>
		<h1><?php the_title(); ?></h1>

		<div>
			<span class="featured--image">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} 
				?>
			</span>
			<span class="article--meta">
				<span class="article--date"><?php echo get_the_date(); ?> <span aria-hidden="true">•</span> </span><?php the_tags('<span class="tag">', '</span><span class="tag">', '</span>'); ?>
			</span>
		</div>
	</div>	

	<?php 
		the_content(); 
	?>

	<?php
	// next and previous post
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


</article>