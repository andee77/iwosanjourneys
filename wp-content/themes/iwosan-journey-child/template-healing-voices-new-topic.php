<?php
/**
 * Template Name: Iwosan Healing Voices — New Topic
 * Description: Lets logged-in, email-verified users start a new discussion
 * topic in Healing Voices. Creates a real hv_topic post assigned to the
 * chosen subcategory, then redirects to the new topic's own page.
 */

$errors           = array();
$posted_title     = '';
$posted_category  = '';
$posted_content   = '';
$new_topic_url    = '';

$is_logged_in = is_user_logged_in();
$is_verified  = false;

if ( $is_logged_in ) {
	$current_user_id = get_current_user_id();
	// Users who never went through the Healing Voices registration flow
	// (e.g. the site's own admin account) have no hv_email_verified meta
	// at all — treat that as "not gated," same logic as the login filter
	// in functions.php, so an existing WordPress user isn't blocked here.
	$is_verified = ! metadata_exists( 'user', $current_user_id, 'hv_email_verified' )
		|| get_user_meta( $current_user_id, 'hv_email_verified', true );
}

if ( $is_logged_in && $is_verified && $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['hv_topic_nonce'] ) && wp_verify_nonce( $_POST['hv_topic_nonce'], 'hv_create_topic_action' ) ) {

	$posted_title    = sanitize_text_field( trim( $_POST['hv_topic_title'] ?? '' ) );
	$posted_category = intval( $_POST['hv_topic_category'] ?? 0 );
	$posted_content  = trim( $_POST['hv_topic_content'] ?? '' );

	if ( empty( $posted_title ) ) {
		$errors[] = 'Please give your topic a title.';
	}

	if ( empty( $posted_category ) || ! term_exists( $posted_category, 'hv_category' ) ) {
		$errors[] = 'Please choose a category.';
	} else {
		$submitted_term = get_term( $posted_category, 'hv_category' );
		if ( ! $submitted_term || (int) $submitted_term->parent === 0 ) {
			$errors[] = 'Please choose a specific subcategory, not a main category.';
		}
	}

	if ( empty( $posted_content ) || strlen( $posted_content ) < 10 ) {
		$errors[] = 'Please write a little more — at least a sentence or two.';
	}

	if ( empty( $errors ) ) {
		$new_post_id = wp_insert_post( array(
			'post_type'    => 'hv_topic',
			'post_status'  => 'publish',
			'post_title'   => $posted_title,
			'post_content' => wp_kses_post( $posted_content ),
			'post_author'  => $current_user_id,
		), true );

		if ( is_wp_error( $new_post_id ) ) {
			$errors[] = $new_post_id->get_error_message();
		} else {
			wp_set_object_terms( $new_post_id, array( $posted_category ), 'hv_category' );
			$new_topic_url = get_permalink( $new_post_id );
		}
	}
}

get_header();

$all_categories  = get_terms( array( 'taxonomy' => 'hv_category', 'parent' => 0, 'hide_empty' => false ) );

?>

<section class="ij-page-banner">
	<h1>Start a New Topic</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<style>
	.hv-topic-form-wrap { max-width: 640px; margin: 0 auto; }
	.hv-field { margin-bottom: 20px; }
	.hv-field label { display: block; font-weight: 700; font-family: 'Montserrat', sans-serif; font-size: 0.9rem; color: #1C3A2A; margin-bottom: 6px; }
	.hv-field input[type="text"], .hv-field select, .hv-field textarea {
		width: 100%; padding: 12px 14px; border: 1px solid #C9BFAE; border-radius: 6px;
		font-family: 'Lato', sans-serif; font-size: 1rem; box-sizing: border-box;
	}
	.hv-field textarea { min-height: 160px; resize: vertical; }
	.hv-field input:focus, .hv-field select:focus, .hv-field textarea:focus { outline: 2px solid #4DAEAF; outline-offset: 1px; }
	.hv-errors { background: #FBEAEA; border-left: 3px solid #C1524B; border-radius: 4px; padding: 14px 18px; margin-bottom: 24px; }
	.hv-errors p { margin: 0 0 6px; color: #7A2E2A; font-size: 0.92rem; }
	.hv-errors p:last-child { margin-bottom: 0; }
	.hv-success { background: #F3E9DA; border-left: 3px solid #C9A052; border-radius: 8px; padding: 28px; text-align: center; }
	.hv-success h2 { margin-top: 0; color: #1C3A2A; }
	.hv-blocked { background: #F3E9DA; border-left: 3px solid #C9A052; border-radius: 8px; padding: 28px; text-align: center; }
	.hv-blocked h2 { margin-top: 0; color: #1C3A2A; }
	.hv-submit-btn { padding: 14px 28px; }
</style>

<div class="ij-section">
	<div class="hv-topic-form-wrap">

		<?php if ( ! $is_logged_in ) : ?>

			<div class="hv-blocked">
				<h2>Log in to start a topic</h2>
				<p>You'll need an account to post in Healing Voices.</p>
				<a href="/healing-voices/" class="ij-btn-gold">Log in or sign up</a>
			</div>

		<?php elseif ( ! $is_verified ) : ?>

			<div class="hv-blocked">
				<h2>Verify your email first</h2>
				<p>Check your inbox for the verification link we sent when you registered — you'll be able to post once your account is verified.</p>
			</div>

		<?php elseif ( $new_topic_url ) : ?>

			<div class="hv-success">
				<h2>Your topic is live</h2>
				<p><a href="<?php echo esc_url( $new_topic_url ); ?>">View your new topic &rarr;</a></p>
			</div>

		<?php else : ?>

			<?php if ( ! empty( $errors ) ) : ?>
				<div class="hv-errors">
					<?php foreach ( $errors as $error ) : ?>
						<p><?php echo esc_html( $error ); ?></p>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<form method="post" action="">
				<?php wp_nonce_field( 'hv_create_topic_action', 'hv_topic_nonce' ); ?>

				<div class="hv-field">
					<label for="hv_topic_title">Title</label>
					<input type="text" id="hv_topic_title" name="hv_topic_title" value="<?php echo esc_attr( $posted_title ); ?>" required>
				</div>

				<div class="hv-field">
					<label for="hv_topic_category">Category</label>
					<select id="hv_topic_category" name="hv_topic_category" required>
						<option value="">Choose a category&hellip;</option>
						<?php foreach ( $all_categories as $main_cat ) :
							$subcategories = get_terms( array( 'taxonomy' => 'hv_category', 'parent' => $main_cat->term_id, 'hide_empty' => false ) );
							?>
							<optgroup label="<?php echo esc_attr( $main_cat->name ); ?>">
								<?php foreach ( $subcategories as $sub_cat ) : ?>
									<option value="<?php echo esc_attr( $sub_cat->term_id ); ?>" <?php selected( $posted_category, $sub_cat->term_id ); ?>><?php echo esc_html( $sub_cat->name ); ?></option>
								<?php endforeach; ?>
							</optgroup>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="hv-field">
					<label for="hv_topic_content">What's on your mind?</label>
					<textarea id="hv_topic_content" name="hv_topic_content" required><?php echo esc_textarea( $posted_content ); ?></textarea>
				</div>

				<button type="submit" class="ij-btn-gold hv-submit-btn">Post topic</button>
			</form>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>
