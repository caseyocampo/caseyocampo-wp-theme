<article class="article">
    <h1><?php the_title(); ?></h1>
    <span class="article--meta">
		<span class="article--date"><strong>Published:</strong> <?php echo get_the_date(); ?></span>
	</span>

	<?php 
		the_content(); 
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