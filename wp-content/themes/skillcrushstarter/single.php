<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

	<section class="blog-page">
		<div class="container wrap">
			<div class="main-content">
			<!-- THIS IS SINGLE.PHP -->
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'content', 'single' ); ?>

    			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {	
					comments_template();
				} ?>

				<?php endwhile;
			?>
			
		</div><!-- .main-content -->
		<?php get_sidebar(); ?>

		<div id="nav" class="navigation">		
			<div class="prev-post"><span class="green-arrow">&larr;</span><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blog' ) ) ); ?>">BACK TO POSTS</a></div>
	    </div>  

	</div><!-- .container .wrap -->
</section><!-- .blog-page -->

<?php
get_footer();


