<?php
/**
 * Template Name: Iwosan Healing Voices — Verify
 * Description: Handles the email verification link sent after registration. Marks the account as verified so it can post in Healing Voices.
 */

$verified = false;
$error    = '';

$token   = sanitize_text_field( $_GET['token'] ?? '' );
$user_id = intval( $_GET['uid'] ?? 0 );

if ( $token && $user_id ) {

	$stored_token       = get_user_meta( $user_id, 'hv_verify_token', true );
	$token_expires      = get_user_meta( $user_id, 'hv_verify_token_expires', true );
	$already_verified   = get_user_meta( $user_id, 'hv_email_verified', true );

	if ( $already_verified ) {
		$verified = true;
	} elseif ( $stored_token && hash_equals( $stored_token, $token ) ) {
		if ( $token_expires && time() > (int) $token_expires ) {
			$error = 'This verification link has expired. Please contact us so we can help activate your account.';
		} else {
			update_user_meta( $user_id, 'hv_email_verified', 1 );
			delete_user_meta( $user_id, 'hv_verify_token' );
			delete_user_meta( $user_id, 'hv_verify_token_expires' );
			$verified = true;
		}
	} else {
		$error = 'This verification link is invalid or has expired.';
	}
} else {
	$error = 'This verification link is missing some information. Please use the link exactly as it appeared in your email.';
}

get_header();

?>

<section class="ij-page-banner">
	<h1>Healing Voices</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<style>
	.hv-verify-wrap { max-width: 480px; margin: 0 auto; text-align: center; }
	.hv-verify-success { background: #F3E9DA; border-left: 3px solid #C9A052; border-radius: 8px; padding: 32px; }
	.hv-verify-success h2 { margin-top: 0; color: #1C3A2A; }
	.hv-verify-error { background: #FBEAEA; border-left: 3px solid #C1524B; border-radius: 8px; padding: 32px; }
	.hv-verify-error h2 { margin-top: 0; color: #7A2E2A; }
	.hv-verify-wrap a.ij-btn-gold { display: inline-block; margin-top: 16px; }
</style>

<div class="ij-section">
	<div class="hv-verify-wrap">

		<?php if ( $verified ) : ?>

			<div class="hv-verify-success">
				<h2>You're verified</h2>
				<p>Your account is active. You're ready to log in and start sharing in Healing Voices.</p>
				<a href="/healing-voices/login/" class="ij-btn-gold">Log in</a>
			</div>

		<?php else : ?>

			<div class="hv-verify-error">
				<h2>Something's not right</h2>
				<p><?php echo esc_html( $error ); ?></p>
				<a href="/healing-voices/join/" class="ij-btn-gold">Back to registration</a>
			</div>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>
