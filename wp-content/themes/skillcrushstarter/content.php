<!-- /*
* the content - yo
*
*/ -->


<article class="post-entry">
		<div class="entry-wrap">
			<header class="entry-header">
				<!-- THIS IS CONTENT.PHP -->
				<div class="entry-meta">
					<time class="post_date" itemprop="datePublished"><?php the_date(); ?></time>
				</div>
				<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
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