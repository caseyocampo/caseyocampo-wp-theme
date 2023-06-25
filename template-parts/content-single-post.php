<article class="article">

    <h1><?php the_title(); ?></h1>
    <span class="article--meta">
		<span class="article--date"><b>Published:</b> <?php echo get_the_date(); ?></span>
		<span style="display: block;"><b>Tags:</b> <?php the_tags('<span class="tag">', '</span><span class="tag">', '</span>'); ?></span>
	</span>

	<?php 
		the_content(); 
	?>

	<?php
	the_post_navigation( array(
		'prev_text' =>
			'<i class="fas fa-arrow-left" aria-hidden="true"></i>' .
			'<span class="screen-reader-text"> Previous post</span> ' .
			'<br /> ' .
			'<span class="post-title" style="font-weight: bold;"> %title</span>',
		'next_text' => 
			'<span class="screen-reader-text">Next post </span> ' .
			'<i class="fas fa-arrow-right" aria-hidden="true"></i>' .
			'<br /> ' .
			'<span class="post-title" style="font-weight: bold;">%title </span>' ,
	) );
	?>
	
		
	<br>
	<br>
		
	<h3>Categories</h3>
	
	<div class="tagcloud">
    	<?php
    		$categories = get_categories();
    		foreach($categories as $category) {
    		   echo '<a href="' . get_category_link($category->term_id) . '" class="tag-cloud-link">' . $category->name . '</a>';
    		}
    	?>
	</div>
		

    <br>
    <hr role="presentation">

</article>