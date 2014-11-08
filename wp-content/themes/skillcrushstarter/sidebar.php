<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>

<aside class="right-aside">
    <?php if (is_active_sidebar('sidebar-1')): ?>
        <!-- <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary"> -->
        	<div class="no-styles">
	            <?php dynamic_sidebar('sidebar-1'); ?>
	            <?php    /**
				 	* Displays social menu
				 	* @param array $args Arguments
				 	*/
				 	$args = array(
				 		'theme_location' => 'social-menu',
				 		'menu' => '',
				 		'container' => 'div',
				 		'container_class' => 'widget',
				 		'container_id' => '',
				 		'menu_class' => 'menu social-menu-sidebar',
				 		'menu_id' => '',
				 		'echo' => true,
				 		'fallback_cb' => 'wp_page_menu',
				 		'before' => '',
				 		'after' => '',
				 		'link_before' => '',
				 		'link_after' => '',
				 		'items_wrap' => '<h2 class="widgettitle">Let\'s Connect!</h2><ul id = "%1$s" class = "%2$s">%3$s</ul>',
				 		'depth' => 0,
				 		'walker' => ''
				 	); 
				 	wp_nav_menu( $args );
				 ?>
	            <?php    /**
				 	* Displays favorite blog posts menu
				 	* @param array $args Arguments
				 	*/
				 	$args = array(
				 		'theme_location' => 'favorite-blog-posts',
				 		'menu' => '',
				 		'container' => 'div',
				 		'container_class' => 'widget',
				 		'container_id' => '',
				 		'menu_class' => 'menu favorite-sidebar',
				 		'menu_id' => '',
				 		'echo' => true,
				 		'fallback_cb' => 'wp_page_menu',
				 		'before' => '',
				 		'after' => '',
				 		'link_before' => '',
				 		'link_after' => '',
				 		'items_wrap' => '<h2 class="widgettitle">Favorite Blog Posts</h2><ul id = "%1$s" class = "%2$s">%3$s</ul>',
				 		'depth' => 0,
				 		'walker' => ''
				 	); 

				 	wp_nav_menu( $args );
				 ?>
	        </div>
				 <?php    /**
				 	* Displays category menu
				 	* @param array $args Arguments
				 	*/
				 	$args = array(
				 		'theme_location' => 'category-menu',
				 		'menu' => '',
				 		'container' => 'div',
				 		'container_class' => 'widget',
				 		'container_id' => '',
				 		'menu_class' => 'menu category-menu-sidebar',
				 		'menu_id' => '',
				 		'echo' => true,
				 		'fallback_cb' => 'wp_page_menu',
				 		'before' => '',
				 		'after' => '',
				 		'link_before' => '',
				 		'link_after' => '',
				 		'items_wrap' => '<h2 class="widgettitle">Categories</h2><ul id = "%1$s" class = "%2$s">%3$s</ul>',
				 		'depth' => 0,
				 		'walker' => ''
				 	); 

				 	wp_nav_menu( $args );
				 ?>

        <div id="sidebar-module-1" class="widget">          	
            <?php
				$args = array(  
				'category_name' => 'Minions',  
				'posts_per_page' => '5'
				); 
				
				query_posts($args); 
			?>
			<h2 class="widgettitle"> Popular Posts </h2>
			<ol>
			<?php while(have_posts() ) : the_post(); ?>
				<li>
					<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
				</li>
			<?php endwhile; ?>				
			</ol>
        </div><!-- #sidebar-module-1 -->
    <?php endif; ?>
</aside>