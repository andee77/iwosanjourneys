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
				<a href="<?php echo esc_url( home_url( '/references/' ) ); ?>">References</a>
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
 * Wellness Self-Assessments — The Quiet Signals + PTSD Screening
 *
 * Usage:
 *   [iwosan_quietsignals_assessment]  -- Men's Health page, as a NEW third section, placed
 *                                     after the existing physical Check-Engine checklist
 *                                     and the partner-facing Co-Pilot guide (neither of
 *                                     which this code touches).
 *   [iwosan_ptsd_assessment]       -- Mental Health page, standalone section.
 *
 * Assets only load on pages where at least one shortcode is present — no impact
 * on other pages' load time.
 */

function iwosan_wellness_assessments_enqueue() {
    global $post;
    if ( ! is_a( $post, 'WP_Post' ) ) {
        return;
    }
    $has_shortcode = has_shortcode( $post->post_content, 'iwosan_quietsignals_assessment' )
        || has_shortcode( $post->post_content, 'iwosan_ptsd_assessment' );

    // Some pages hardcode the shortcode into their template file via do_shortcode()
    // rather than typing it into the block editor, so it never appears in post_content.
    $known_templates = array(
        'template-mens-health.php',
        'template-mental-health.php',
    );
    $current_template = get_page_template_slug( $post->ID );
    $has_hardcoded_template = in_array( $current_template, $known_templates, true );

    if ( ! $has_shortcode && ! $has_hardcoded_template ) {
        return;
    }

    wp_enqueue_style(
        'iwosan-wellness-assessments',
        get_stylesheet_directory_uri() . '/assets/css/iwosan-mens-assessments.css',
        array(),
        '1.1.0'
    );

    wp_enqueue_script(
        'iwosan-wellness-assessments',
        get_stylesheet_directory_uri() . '/assets/js/iwosan-mens-assessments.js',
        array(),
        '1.1.0',
        true // load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'iwosan_wellness_assessments_enqueue' );

function iwosan_quietsignals_assessment_shortcode() {
    return '<div id="iwosan-quietsignals-mount" class="iwosan-assessment"></div>';
}
add_shortcode( 'iwosan_quietsignals_assessment', 'iwosan_quietsignals_assessment_shortcode' );

function iwosan_ptsd_assessment_shortcode() {
    return '<div id="iwosan-ptsd-mount" class="iwosan-assessment"></div>';
}
add_shortcode( 'iwosan_ptsd_assessment', 'iwosan_ptsd_assessment_shortcode' );
