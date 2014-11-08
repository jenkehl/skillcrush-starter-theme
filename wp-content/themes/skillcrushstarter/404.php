<?php
/**
 * The template for displaying 404 pages (Not Found)
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
				<h1 class="page-title">Not Found</h1>
			</header>
				<p>It looks like nothing was found at this location. Maybe try a search?</p>
				<?php get_search_form(); ?>
		</div><!-- .main-content -->
		<?php get_sidebar(); ?>
	</div><!-- .container .wrap -->
</section><!-- .blog-page -->


<?php get_footer(); ?>
