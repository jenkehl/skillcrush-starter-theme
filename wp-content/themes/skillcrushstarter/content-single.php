<!-- /*
*
* This is what will be pulled in for a single blog post 
*
*/ -->


<article id="post-<?php the_ID(); ?>" class="post-entry individual-post" <?php post_class(); ?>>
	<!-- THIS IS CONTENT-SINGLE.PHP -->
	<header>
		<p class="post_date"><?php the_date(); ?></p>
		<h5 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
		<?php the_post_thumbnail(); ?>
	</header>
	<div class="entry-summary">
		<div class="entry-meta">
			<?php the_content() ?>
		</div>
	</div>
	<footer class="entry-footer">
		<span class="entry-terms author">Written by <?php the_author(); ?></span> 
		<span class="entry-terms category">Posted in <?php the_category(' and ') ?> </span>
		<span class="entry-terms comments"> <?php echo get_comments_number() ?> Comments </span><?php if (is_user_logged_in() && current_user_can('edit_posts')): echo '| <a href="' . get_edit_post_link() . '">Edit Post</a>'; endif; ?></p>
	</footer>
</article>