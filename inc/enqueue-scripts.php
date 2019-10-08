<?php 
/**
 * Enqueue scripts and styles.
 */
function gcc_starter_kit_scripts() {

	wp_enqueue_style( 'gcc-landing-style', get_stylesheet_directory_uri() . '/assets/css/style.min.css');

	//wp_enqueue_style( 'gcc-landing-font', '//fonts.googleapis.com/css?family=Oswald&display=swap');
	
   wp_enqueue_script( 'gcc-landing-scripts', get_stylesheet_directory_uri() .  '/assets/js/main.mins.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gcc_starter_kit_scripts' );
