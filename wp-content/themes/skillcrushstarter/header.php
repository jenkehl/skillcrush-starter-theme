<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<?php if( !is_front_page() ) { ?>

<body <?php body_class(); ?>>

	<!-- <div id="page" class="site"> -->

		<?php if (get_header_image()): ?>
			<div id="site-header">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
				</a>
			</div>
		<?php endif; ?>

		<header class="page-header clearfix container">
			<!-- <div class="header-main"> -->
				<a href="<?php echo esc_url(home_url('/')); ?>" class="top-logo" rel="home"><span class="title"><?php bloginfo('name'); ?></span>
				<span class="sub-title"><?php bloginfo('description'); ?></span>
			
				<nav class="top-nav">
					<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
				</nav>
			<!-- </div> -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">

<?php } ?>



