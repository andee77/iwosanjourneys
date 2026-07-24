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
	wp_enqueue_style(
		'iwosan-journey-fonts',
		'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Lato:wght@400;700&family=JetBrains+Mono:wght@500&display=swap',
		array(),
		null
	);
}

add_action( 'wp', 'iwosan_replace_kadence_footer' );
function iwosan_replace_kadence_footer() {
	remove_all_actions( 'kadence_footer' );
	add_action( 'kadence_footer', 'iwosan_custom_footer' );
}
function iwosan_custom_footer() {
	?>
	<div class="site-footer-wrap">
		<div class="ij-custom-footer">
			<div class="ij-footer-brand">
				<div class="ij-footer-brand-name">Iwosan Journey's</div>
				<div class="ij-footer-brand-tagline">A JourneyWell Global LLC brand.</div>
			</div>
			<nav class="ij-footer-nav">
				<a href="<?php echo esc_url( home_url( '/terms-of-use/' ) ); ?>">Terms of Use</a>
				<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
				<a href="<?php echo esc_url( home_url( '/medical-disclaimer/' ) ); ?>">Medical Disclaimer</a>
				<a href="<?php echo esc_url( home_url( '/vendor-agreement/' ) ); ?>">Vendor Agreement</a>
			</nav>
			<div class="ij-footer-meta">
				<div class="ij-footer-copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> JourneyWell Global LLC. All rights reserved.</div>
				<div class="ij-footer-domain">IWOSANJOURNEY.COM &middot; EST. 2026</div>
			</div>
		</div>
	</div>
	<?php
}
