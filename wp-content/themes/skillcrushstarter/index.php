<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
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

		<!-- THIS IS INDEX.PHP -->
		<?php get_template_part('content', 'post');?>

		</div><!-- .main-content -->

		<?php get_sidebar(); ?>
		
		</div><!-- .container .wrap -->

	</section><!-- .blog-page -->


<?php get_footer(); ?>

