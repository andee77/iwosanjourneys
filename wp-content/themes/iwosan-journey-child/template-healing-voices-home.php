<?php
/**
 * Template Name: Iwosan Healing Voices — Home (Join / Login)
 * Description: Combined sign-up + sign-in landing page for Healing Voices, replacing
 * the separate Join and Login pages. Scattered mock discussion cards form a decorative
 * border (placeholder content until real threads exist); a centered panel holds both
 * forms side by side — registration on the left, login on the right.
 */

// ============================================================
// REGISTRATION HANDLING (left form)
// ============================================================
$reg_errors      = array();
$reg_success     = false;
$posted_username = '';
$posted_email    = '';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['hv_register_nonce'] ) && wp_verify_nonce( $_POST['hv_register_nonce'], 'hv_register_action' ) ) {

	$username         = sanitize_user( trim( $_POST['hv_username'] ?? '' ) );
	$email            = sanitize_email( trim( $_POST['hv_email'] ?? '' ) );
	$password         = $_POST['hv_password'] ?? '';
	$password_confirm = $_POST['hv_password_confirm'] ?? '';

	$posted_username = $username;
	$posted_email    = $email;

	if ( empty( $username ) ) {
		$reg_errors[] = 'Please choose a username.';
	} elseif ( ! validate_username( $username ) ) {
		$reg_errors[] = 'That username contains invalid characters. Letters, numbers, spaces, and _ . - @ only.';
	}

	if ( empty( $email ) || ! is_email( $email ) ) {
		$reg_errors[] = 'Please enter a valid email address.';
	}

	if ( empty( $password ) || strlen( $password ) < 8 ) {
		$reg_errors[] = 'Password must be at least 8 characters.';
	} elseif ( $password !== $password_confirm ) {
		$reg_errors[] = "Passwords don't match.";
	}

	if ( empty( $reg_errors ) && ( username_exists( $username ) || email_exists( $email ) ) ) {
		$reg_errors[] = 'That username or email may already be in use. Try logging in, or use different details.';
	}

	if ( empty( $reg_errors ) ) {
		$user_id = wp_insert_user( array(
			'user_login' => $username,
			'user_email' => $email,
			'user_pass'  => $password,
			'role'       => 'subscriber',
		) );

		if ( is_wp_error( $user_id ) ) {
			$reg_errors[] = $user_id->get_error_message();
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

			$reg_success = true;
		}
	}
}

// ============================================================
// LOGIN HANDLING (right form)
// ============================================================
$login_error    = '';
$logged_in_user = null;

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['hv_login_nonce'] ) && wp_verify_nonce( $_POST['hv_login_nonce'], 'hv_login_action' ) ) {

	$username_or_email = sanitize_text_field( trim( $_POST['hv_login_user'] ?? '' ) );
	$login_password    = $_POST['hv_login_password'] ?? '';

	if ( empty( $username_or_email ) || empty( $login_password ) ) {
		$login_error = 'Please enter both your username/email and password.';
	} else {
		$result = wp_signon( array(
			'user_login'    => $username_or_email,
			'user_password' => $login_password,
			'remember'      => true,
		), is_ssl() );

		if ( is_wp_error( $result ) ) {
			$error_codes = $result->get_error_codes();

			if ( in_array( 'hv_not_verified', $error_codes, true ) ) {
				$login_error = wp_strip_all_tags( $result->get_error_message( 'hv_not_verified' ) );
			} else {
				$login_error = "That username/email and password combination doesn't match an account. Please try again.";
			}
		} else {
			$logged_in_user = $result;
		}
	}
}

get_header();

// ============================================================
// Mock discussion cards — placeholder content until real threads exist.
// Swap this array for real topic data once threaded discussions are built.
// ============================================================
$mock_cards = array(
	array( 'cat' => 'Menopause',      'text' => 'Anyone else dealing with brain fog at work?' ),
	array( 'cat' => "Men's Health",   'text' => 'Finally talked to my doctor about it' ),
	array( 'cat' => 'Maternal Health','text' => 'Postpartum anxiety is real, y\'all' ),
	array( 'cat' => 'Mental Health',  'text' => 'Burnout recovery — where do I start?' ),
	array( 'cat' => 'Menopause',      'text' => 'HRT vs non-hormonal, what worked for you?' ),
	array( 'cat' => "Men's Health",   'text' => 'First testosterone panel — what to expect' ),
	array( 'cat' => 'Maternal Health','text' => 'Looking for a doula recommendation' ),
	array( 'cat' => 'Mental Health',  'text' => 'Therapy waitlists are so long right now' ),
	array( 'cat' => 'Menopause',      'text' => 'Night sweats are ruining my sleep' ),
	array( 'cat' => "Men's Health",   'text' => 'How do I even bring this up with my partner?' ),
	array( 'cat' => 'Maternal Health','text' => 'My hospital dismissed my pain, what now?' ),
	array( 'cat' => 'Mental Health',  'text' => 'Has anyone tried EMDR for trauma?' ),
	array( 'cat' => 'Menopause',      'text' => 'Joint pain snuck up on me this year' ),
	array( 'cat' => "Men's Health",   'text' => 'Sleep apnea changed everything once treated' ),
	array( 'cat' => 'Maternal Health','text' => 'Second opinion saved my pregnancy' ),
	array( 'cat' => 'Mental Health',  'text' => 'Setting boundaries at work, finally' ),
);

$cat_colors = array(
	'Menopause'       => '#C17A7A',
	"Men's Health"    => '#4DAEAF',
	'Maternal Health' => '#8B5E3C',
	'Mental Health'   => '#1C3A2A',
);

?>

<style>
	.hv-landing-wrap {
		position: relative;
		min-height: 780px;
		background: #FAF8F4;
		overflow: hidden;
		padding: 40px 20px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.hv-card-field {
		position: absolute;
		inset: 0;
		pointer-events: none;
		z-index: 1;
	}
	.hv-mock-card {
		position: absolute;
		background: #FFFFFF;
		border-radius: 8px;
		box-shadow: 0 6px 16px rgba(10,31,68,0.08);
		padding: 10px 14px;
		font-family: 'Lato', sans-serif;
		font-size: 0.78rem;
		color: #3D3D3A;
		width: 168px;
		line-height: 1.35;
	}
	.hv-mock-card .hv-mock-tag {
		display: inline-block;
		font-family: 'Montserrat', sans-serif;
		font-weight: 700;
		font-size: 0.62rem;
		letter-spacing: 0.04em;
		text-transform: uppercase;
		margin-bottom: 4px;
	}

	.hv-auth-panel {
		position: relative;
		z-index: 2;
		background: #FFFFFF;
		border-radius: 16px;
		box-shadow: 0 24px 60px rgba(10,31,68,0.14);
		max-width: 760px;
		width: 100%;
		padding: 40px 32px;
	}
	.hv-auth-header { text-align: center; margin-bottom: 28px; }
	.hv-auth-header img { height: 40px; margin-bottom: 12px; }
	.hv-auth-header h1 { font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 1.5rem; color: #1C3A2A; margin: 0 0 6px; }
	.hv-auth-header p { color: #4A5568; font-size: 0.95rem; margin: 0; }

	.hv-auth-grid { display: grid; grid-template-columns: 1fr 1px 1fr; gap: 28px; }
	.hv-auth-divider { background: #E5E0D5; }
	.hv-auth-col h2 { font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 1.05rem; color: #1C3A2A; margin: 0 0 16px; }

	.hv-field { margin-bottom: 14px; }
	.hv-field label { display: block; font-weight: 700; font-family: 'Montserrat', sans-serif; font-size: 0.8rem; color: #1C3A2A; margin-bottom: 4px; }
	.hv-field input { width: 100%; padding: 10px 12px; border: 1px solid #C9BFAE; border-radius: 6px; font-family: 'Lato', sans-serif; font-size: 0.92rem; box-sizing: border-box; }
	.hv-field input:focus { outline: 2px solid #4DAEAF; outline-offset: 1px; }
	.hv-hint { font-size: 0.72rem; color: #4A5568; margin-top: 3px; }

	.hv-errors { background: #FBEAEA; border-left: 3px solid #C1524B; border-radius: 4px; padding: 10px 14px; margin-bottom: 14px; }
	.hv-errors p { margin: 0 0 4px; color: #7A2E2A; font-size: 0.82rem; }
	.hv-errors p:last-child { margin-bottom: 0; }
	.hv-success { background: #F3E9DA; border-left: 3px solid #C9A052; border-radius: 6px; padding: 18px; text-align: center; }
	.hv-success h3 { margin-top: 0; color: #1C3A2A; font-size: 1rem; }
	.hv-success p { font-size: 0.85rem; margin-bottom: 0; }

	.hv-submit-btn { width: 100%; padding: 11px; font-size: 0.9rem; }
	.hv-reset-link { text-align: center; margin-top: 10px; font-size: 0.78rem; }

	@media (max-width: 720px) {
		.hv-auth-grid { grid-template-columns: 1fr; }
		.hv-auth-divider { display: none; }
		.hv-mock-card { display: none; }
	}
</style>

<div class="hv-landing-wrap">

	<div class="hv-card-field" aria-hidden="true">
		<?php
		// Distribute mock cards around the 4 edges with varied rotation, purely
		// decorative — hidden on mobile via the media query above.
		$positions = array(
			array( 'top' => '2%',  'left' => '4%' ),
			array( 'top' => '1%',  'left' => '26%' ),
			array( 'top' => '3%',  'right' => '28%' ),
			array( 'top' => '2%',  'right' => '4%' ),
			array( 'top' => '20%', 'left' => '1%' ),
			array( 'bottom' => '22%', 'left' => '1.5%' ),
			array( 'top' => '20%', 'right' => '1%' ),
			array( 'bottom' => '22%', 'right' => '1.5%' ),
			array( 'bottom' => '3%', 'left' => '5%' ),
			array( 'bottom' => '1%', 'left' => '27%' ),
			array( 'bottom' => '4%', 'right' => '27%' ),
			array( 'bottom' => '2%', 'right' => '5%' ),
			array( 'top' => '42%', 'left' => '0.5%' ),
			array( 'top' => '42%', 'right' => '0.5%' ),
			array( 'top' => '11%', 'left' => '15%' ),
			array( 'top' => '10%', 'right' => '16%' ),
		);
		$rotations = array( -8, 6, -5, 9, -7, 4, 8, -6, 5, -9, 7, -4, 6, -8, 5, -6 );

		foreach ( $mock_cards as $i => $card ) :
			$pos = $positions[ $i % count( $positions ) ];
			$rot = $rotations[ $i % count( $rotations ) ];
			$style = 'transform: rotate(' . $rot . 'deg);';
			foreach ( $pos as $side => $val ) {
				$style .= " $side: $val;";
			}
			$color = $cat_colors[ $card['cat'] ] ?? '#8B5E3C';
			?>
			<div class="hv-mock-card" style="<?php echo esc_attr( $style ); ?>">
				<span class="hv-mock-tag" style="color: <?php echo esc_attr( $color ); ?>;"><?php echo esc_html( $card['cat'] ); ?></span><br>
				<?php echo esc_html( $card['text'] ); ?>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="hv-auth-panel">

		<div class="hv-auth-header">
			<h1>Healing Voices</h1>
			<p>A space to share and ask questions toward healing, together.</p>
		</div>

		<?php if ( $reg_success || $logged_in_user ) : ?>

			<?php if ( $reg_success ) : ?>
				<div class="hv-success">
					<h3>Check your email</h3>
					<p>We've sent a verification link to <strong><?php echo esc_html( $posted_email ); ?></strong>. Click it to activate your account before you can post.</p>
				</div>
			<?php endif; ?>

			<?php if ( $logged_in_user ) : ?>
				<div class="hv-success" style="margin-top: <?php echo $reg_success ? '14px' : '0'; ?>;">
					<h3>Welcome back, <?php echo esc_html( $logged_in_user->display_name ); ?></h3>
					<p>You're logged in. Healing Voices itself is still being built — check back soon to start sharing and reading discussions.</p>
				</div>
			<?php endif; ?>

		<?php else : ?>

			<div class="hv-auth-grid">

				<div class="hv-auth-col">
					<h2>Create an account</h2>

					<?php if ( ! empty( $reg_errors ) ) : ?>
						<div class="hv-errors">
							<?php foreach ( $reg_errors as $error ) : ?>
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
						</div>

						<div class="hv-field">
							<label for="hv_password_confirm">Confirm password</label>
							<input type="password" id="hv_password_confirm" name="hv_password_confirm" minlength="8" required>
						</div>

						<button type="submit" class="ij-btn-gold hv-submit-btn">Create my account</button>
					</form>
				</div>

				<div class="hv-auth-divider"></div>

				<div class="hv-auth-col">
					<h2>Log in</h2>

					<?php if ( ! empty( $login_error ) ) : ?>
						<div class="hv-errors">
							<p><?php echo esc_html( $login_error ); ?></p>
						</div>
					<?php endif; ?>

					<form method="post" action="">
						<?php wp_nonce_field( 'hv_login_action', 'hv_login_nonce' ); ?>

						<div class="hv-field">
							<label for="hv_login_user">Username or email</label>
							<input type="text" id="hv_login_user" name="hv_login_user" required>
						</div>

						<div class="hv-field">
							<label for="hv_login_password">Password</label>
							<input type="password" id="hv_login_password" name="hv_login_password" required>
						</div>

						<button type="submit" class="ij-btn-gold hv-submit-btn">Log in</button>
					</form>

					<p class="hv-reset-link"><a href="<?php echo esc_url( wp_lostpassword_url() ); ?>">Forgot your password?</a></p>
				</div>

			</div>

		<?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>
