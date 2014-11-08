<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="blog-page">
	<div class="container wrap">
		<div class="main-content">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for <span>%s</span>', 'skillcrushstarter' ), get_search_query() ); ?></h1>
				</header><!-- .page-header -->

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
					<!-- next / prev here -->
				<?php else: ?>
					<article>
						<h4>No posts found!</h4>
						<p>Can I interest you in another search?</p>
						<?php get_search_form(); ?>
					</article>
				<?php endif; ?>

		</div><!-- .main-content -->
		<?php get_sidebar(); ?>
		<div id="nav" class="navigation">		
			<div class="prev-post"><span class="green-arrow">&larr;</span><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blog' ) ) ); ?>">BACK TO POSTS</a></div>
	    </div>
	</div><!-- .container .wrap -->
</section><!-- .blog-page -->
<?php
get_footer();
