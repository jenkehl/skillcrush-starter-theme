<?php

// // Exit if accessed directly
// if( !defined( 'ABSPATH' ) ) {
// 	exit;
// } 

/**
 * 
 * Search Form Template
 *
**/?>

<form action="<?php echo site_url(); ?>" class="search-form" method="get">
     <form>
         <!-- <label for="s" class="screen-reader-text">Search for:</label> -->
         <input type="text" class="input" id="search-box-text" placeholder="Search <?php esc_attr_x( 'Search &hellip;', 'placeholder' ) ?>" value="<?php get_search_query() ?>" name="s" title="<?php esc_attr_x( 'Search for:', 'label' )?>" />
		<input type="submit" id="searchsubmit" class="input-btn" value="<?php esc_attr_x( '', 'submit button' ) ?>" />
     </form>
</form>

