<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area default-form">

	<?php if ( have_comments() ) : ?>

	<h5 class="comments-title">
		<?php
			printf( _n( 'One comment', '%1$s comments', get_comments_number(), 'skillcrushstarter' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h5>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'skillcrushstarter' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'skillcrushstarter' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'skillcrushstarter' ) ); ?></div>
	</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<!-- <ol class="comment-list"> -->
<!-- 		<//?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'=> 34,
			) );


		?> -->
	<!-- </ol> --><!-- .comment-list -->
	

	<!-- This is calling the custom function 'mytheme_comment' in functions.php - which will override the default in comment-template.php -->
	
	<ul class="commentlist">
		<?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
	</ul> <!-- /comment-list -->


	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'skillcrushstarter' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'skillcrushstarter' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'skillcrushstarter' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'skillcrushstarter' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

<!-- This is customizing the comment form by using new arguments -> '$comments-args' - that are then passed in the comment_form function, which overrides the 
default comment_form function that lives in comment-template.php -->

<?php $comment_args = array( 
	// change the title of the reply section
	'title_reply'=>'Leave a Comment',
	// change the title of send button 
	'label_submit'=>'Submit Comment',
	'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' .
						'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . ' /></p>',   
			'email'  => '<p class="comment-form-email">' . '<label for="email">' . __( 'Email (hidden)' ) . '</label> ' .
						'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . ' />'.'</p>',
			'url'    => '' ) ),
	// redefine your own textarea (the comment body)
	'comment_field' => '<p>' . '<label for="comment">' . __( 'Your Comment' ) . '</label>' .
						'<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' . '</p>',
	// "Text or HTML to be displayed after the set of comment fields"
	'comment_notes_after' => '',

);

comment_form($comment_args); ?>


</div><!-- #comments -->
