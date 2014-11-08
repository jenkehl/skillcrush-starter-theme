
<?php 
/*
**
**This is a template file for the post content
**
*/ 
?>

<!-- THIS IS CONTENT-POST.PHP -->

		<?php
		// Here we are a little more specific about what we want to appear (which category, ect...)
		//$args = array( 
		// 'posts_status' => 'publish', 
		// 'category_name' => 'Uncategorized, Advice, Minions, Career',  
		// //'orderby' => 'rand',
		//'posts_per_page' => '5' ); 
		
		//query_posts($args);

		if (have_posts()): while (have_posts()): the_post();
		  
		  get_template_part('content', get_post_format());
		  endwhile; 

		?>
<!-- 		<div id="nav" class="navigation">
    		<div class="prev-post"><?//php previous_posts_link(); ?></div>
   			<div class="post-post"><?//php next_posts_link(); ?></div>
	    </div>  -->

	    <div id="nav" class="navigation">
			    <?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'prev_text' => __( '&larr; OLDER POSTS', 'skillcrushstarter' ),
			'next_text' => __( 'NEWER POSTS &rarr;', 'skillcrushstarter' ),
		) );
		?>
		</div>

	    <?php endif; ?>




