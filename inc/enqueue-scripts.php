<?php 
/**
 * Enqueue scripts and styles.
 */
function gcc_starter_kit_scripts() {

	wp_enqueue_style( 'gcc-landing-style', get_stylesheet_directory_uri() . '/assets/css/styleV2.min.css', array(), '0.1.6', 'all');

   wp_enqueue_script( 'gcc-landing-scripts', get_stylesheet_directory_uri() .  '/assets/js/main.min.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gcc_starter_kit_scripts' );
