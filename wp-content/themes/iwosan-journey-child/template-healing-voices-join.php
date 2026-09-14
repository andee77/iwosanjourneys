<?php
/**
 * Template Name: Iwosan Healing Voices — Join
 * Description: Custom registration page for the Healing Voices discussion board, with email verification before posting is allowed.
 */

$errors = array();
$success = false;
$posted_username = '';
$posted_email = '';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['hv_register_nonce'] ) && wp_verify_nonce( $_POST['hv_register_nonce'], 'hv_register_action' ) ) {

	$username         = sanitize_user( trim( $_POST['hv_username'] ?? '' ) );
	$email            = sanitize_email( trim( $_POST['hv_email'] ?? '' ) );
	$password         = $_POST['hv_password'] ?? '';
	$password_confirm = $_POST['hv_password_confirm'] ?? '';

	$posted_username = $username;
	$posted_email    = $email;

	if ( empty( $username ) ) {
		$errors[] = 'Please choose a username.';
	} elseif ( ! validate_username( $username ) ) {
		$errors[] = 'That username contains invalid characters. Letters, numbers, spaces, and _ . - @ only.';
	}

	if ( empty( $email ) || ! is_email( $email ) ) {
		$errors[] = 'Please enter a valid email address.';
	}

	if ( empty( $password ) || strlen( $password ) < 8 ) {
		$errors[] = 'Password must be at least 8 characters.';
	} elseif ( $password !== $password_confirm ) {
		$errors[] = "Passwords don't match.";
	}

	// Existence checks run only after format validation passes, and use ONE
	// generic message regardless of whether it's the username or email that
	// conflicts — showing which one matched would let someone probe the form
	// to discover whether a specific email is registered on this site.
	if ( empty( $errors ) && ( username_exists( $username ) || email_exists( $email ) ) ) {
		$errors[] = 'That username or email may already be in use. Try logging in, or use different details.';
	}

	if ( empty( $errors ) ) {
		$user_id = wp_insert_user( array(
			'user_login' => $username,
			'user_email' => $email,
			'user_pass'  => $password,
			'role'       => 'subscriber',
		) );

		if ( is_wp_error( $user_id ) ) {
			$errors[] = $user_id->get_error_message();
		} else {
			$token = bin2hex( random_bytes( 32 ) );
			update_user_meta( $user_id, 'hv_email_verified', 0 );
			update_user_meta( $user_id, 'hv_verify_token', $token );
			update_user_meta( $user_id, 'hv_verify_token_expires', time() + ( 48 * HOUR_IN_SECONDS ) );

			$verify_url = add_query_arg(
				array(
					'token' => $token,
					'uid'   => $user_id,
				),
				home_url( '/healing-voices/verify/' )
			);

			$subject = 'Verify your Healing Voices account';
			$message = "Welcome to Healing Voices — a space to share and ask questions toward healing.\n\n"
				. "Please verify your email to activate your account:\n{$verify_url}\n\n"
				. "If you didn't create this account, you can safely ignore this email.";

			wp_mail( $email, $subject, $message );

			$success = true;
		}
	}
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
	.hv-form-wrap { max-width: 480px; margin: 0 auto; }
	.hv-form-wrap p.hv-intro { text-align: center; margin-bottom: 32px; }
	.hv-field { margin-bottom: 20px; }
	.hv-field label { display: block; font-weight: 700; font-family: 'Montserrat', sans-serif; font-size: 0.9rem; color: #1C3A2A; margin-bottom: 6px; }
	.hv-field input { width: 100%; padding: 12px 14px; border: 1px solid #C9BFAE; border-radius: 6px; font-family: 'Lato', sans-serif; font-size: 1rem; box-sizing: border-box; }
	.hv-field input:focus { outline: 2px solid #4DAEAF; outline-offset: 1px; }
	.hv-hint { font-size: 0.8rem; color: #4A5568; margin-top: 4px; }
	.hv-errors { background: #FBEAEA; border-left: 3px solid #C1524B; border-radius: 4px; padding: 14px 18px; margin-bottom: 24px; }
	.hv-errors p { margin: 0 0 6px; color: #7A2E2A; font-size: 0.92rem; }
	.hv-errors p:last-child { margin-bottom: 0; }
	.hv-success { background: #F3E9DA; border-left: 3px solid #C9A052; border-radius: 8px; padding: 28px; text-align: center; }
	.hv-success h2 { margin-top: 0; color: #1C3A2A; }
	.hv-submit-btn { width: 100%; padding: 14px; }
	.hv-login-link { text-align: center; margin-top: 20px; font-size: 0.92rem; color: #4A5568; }
</style>

<div class="ij-section">
	<div class="hv-form-wrap">

		<?php if ( $success ) : ?>

			<div class="hv-success">
				<h2>Check your email</h2>
				<p>We've sent a verification link to <strong><?php echo esc_html( $posted_email ); ?></strong>. Click the link to activate your account before you can post in Healing Voices.</p>
				<p style="margin-bottom: 0;">Didn't get it? Check your spam folder, or make sure the address was typed correctly.</p>
			</div>

		<?php else : ?>

			<p class="hv-intro">Create an account to share and ask questions in Healing Voices — a space built toward healing, together.</p>

			<?php if ( ! empty( $errors ) ) : ?>
				<div class="hv-errors">
					<?php foreach ( $errors as $error ) : ?>
						<p><?php echo esc_html( $error ); ?></p>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<form method="post" action="">
				<?php wp_nonce_field( 'hv_register_action', 'hv_register_nonce' ); ?>

				<div class="hv-field">
					<label for="hv_username">Username</label>
					<input type="text" id="hv_username" name="hv_username" value="<?php echo esc_attr( $posted_username ); ?>" required>
				</div>

				<div class="hv-field">
					<label for="hv_email">Email</label>
					<input type="email" id="hv_email" name="hv_email" value="<?php echo esc_attr( $posted_email ); ?>" required>
					<p class="hv-hint">We'll send a verification link here before you can post.</p>
				</div>

				<div class="hv-field">
					<label for="hv_password">Password</label>
					<input type="password" id="hv_password" name="hv_password" minlength="8" required>
					<p class="hv-hint">At least 8 characters.</p>
				</div>

				<div class="hv-field">
					<label for="hv_password_confirm">Confirm password</label>
					<input type="password" id="hv_password_confirm" name="hv_password_confirm" minlength="8" required>
				</div>

				<button type="submit" class="ij-btn-gold hv-submit-btn">Create my account</button>
			</form>

			<p class="hv-login-link">Already have an account? <a href="/healing-voices/login/">Log in</a></p>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>
