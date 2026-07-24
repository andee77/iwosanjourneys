<?php
add_action( 'wp_enqueue_scripts', 'iwosan_journey_child_enqueue_styles' );
function iwosan_journey_child_enqueue_styles() {
	wp_enqueue_style( 'kadence-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style(
		'iwosan-journey-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'kadence-parent-style' ),
		wp_get_theme()->get( 'Version' )
	);
}
