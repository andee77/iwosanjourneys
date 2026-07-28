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

/**
 * Men's Health Assessments — Check-Engine + Co-Pilot
 *
 * Usage on the Men's Health page (Custom HTML block or page content):
 *   [iwosan_checkengine_assessment]   -- place near the top, under the check-engine-light hero copy
 *   [iwosan_copilot_assessment]       -- place lower, next to the Form 7 (Vitality Baseline) download
 *
 * Assets only load on pages where at least one shortcode is present — no impact
 * on other pages' load time.
 */

function iwosan_mens_assessments_enqueue() {
    global $post;
    if ( ! is_a( $post, 'WP_Post' ) ) {
        return;
    }
    $has_shortcode = has_shortcode( $post->post_content, 'iwosan_checkengine_assessment' )
        || has_shortcode( $post->post_content, 'iwosan_copilot_assessment' );

    if ( ! $has_shortcode ) {
        return;
    }

    wp_enqueue_style(
        'iwosan-mens-assessments',
        get_stylesheet_directory_uri() . '/assets/css/iwosan-mens-assessments.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'iwosan-mens-assessments',
        get_stylesheet_directory_uri() . '/assets/js/iwosan-mens-assessments.js',
        array(),
        '1.0.0',
        true // load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'iwosan_mens_assessments_enqueue' );

function iwosan_checkengine_assessment_shortcode() {
    return '<div id="iwosan-checkengine-mount" class="iwosan-assessment"></div>';
}
add_shortcode( 'iwosan_checkengine_assessment', 'iwosan_checkengine_assessment_shortcode' );

function iwosan_copilot_assessment_shortcode() {
    return '<div id="iwosan-copilot-mount" class="iwosan-assessment"></div>';
}
add_shortcode( 'iwosan_copilot_assessment', 'iwosan_copilot_assessment_shortcode' );
