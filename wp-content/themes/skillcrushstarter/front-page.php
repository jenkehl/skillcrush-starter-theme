<?php
/**
 * The template for the homepage
 * 
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?> <!-- Conditionally removed in header.php for this page -->

	<section class="landing-page landing-bg">
		<div class="container">
			<div class="author-intro">
				<div class="content">
				<?php
					// Start the Loop.
					while (have_posts()): the_post(); ?>
				
						<?php the_content(); ?>
					<?php endwhile; ?>

				<p class="btn"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blog' ) ) ); ?>">View My Blog </a></p>
				</div><!-- .content -->
			</div><!-- .author-intro -->
		 </div> <!-- .container -->
	</section>
</body>
</html>

<?php get_footer(); ?> <!-- Conditionally removed in footer.php for this page -->




