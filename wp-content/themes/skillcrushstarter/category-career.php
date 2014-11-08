<?php
/**
 * The template for displaying Advice Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="blog-page">
	<div class="container wrap">
		<div class="main-content">
			<header class="page-header">
			<h1 class="page-title"><?php printf( __( 'Posts categorized as <span>%s</span>', 'skillcrushstarter' ), single_cat_title( '', false ) ); ?></h1>

					<?php
						// Show an optional term description.
						$term_description = term_description();
						if ( ! empty( $term_description ) ) :
							printf( '<div class="taxonomy-description">%s</div>', $term_description );
						endif;
					?>
				</header><!-- .category-header -->
				<?php
				 if ( have_posts() ): 
				// Start the Loop.
					while ( have_posts() ) : 
						the_post();
						get_template_part( 'content', get_post_format() ); 
					endwhile; ?>
				<?php else: ?>
					<article>
						<h4>No posts found!</h4>
					</article>

				<?php endif; ?>
		</div><!-- .main-content -->
		<?php get_sidebar(); ?>
		<div id="nav" class="navigation">
    		<div class="prev-post"><?php previous_posts_link(); ?></div>
   			<div class="post-post"><?php next_posts_link(); ?></div>
	   	</div>
	</div>
</section>

<?php
get_footer();
