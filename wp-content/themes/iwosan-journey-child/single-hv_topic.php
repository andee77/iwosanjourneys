<?php
/**
 * single-hv_topic.php
 * Single view for a Healing Voices discussion topic. WordPress picks this up
 * automatically for the hv_topic post type (template hierarchy by filename,
 * not a page-template assignment like the rest of the Healing Voices pages).
 * Uses WordPress's native comments_template() for threaded replies —
 * restyled to match the site, gated server-side in functions.php so only
 * logged-in, verified accounts can actually submit one.
 */

get_header();

while ( have_posts() ) :
	the_post();

	$terms         = get_the_terms( get_the_ID(), 'hv_category' );
	$category_name = ( $terms && ! is_wp_error( $terms ) && ! empty( $terms ) ) ? $terms[0]->name : '';

	$is_logged_in = is_user_logged_in();
	$is_verified  = false;
	if ( $is_logged_in ) {
		$current_user_id = get_current_user_id();
		$is_verified = ! metadata_exists( 'user', $current_user_id, 'hv_email_verified' )
			|| get_user_meta( $current_user_id, 'hv_email_verified', true );
	}
	?>

	<section class="ij-page-banner">
		<h1><?php the_title(); ?></h1>
	</section>

	<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
		<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
	</svg>

	<style>
		.hv-topic-wrap { max-width: 720px; margin: 0 auto; }
		.hv-topic-meta { font-family: 'Montserrat', sans-serif; font-size: 0.8rem; color: #4A5568; margin-bottom: 24px; }
		.hv-topic-meta .hv-topic-cat { color: #8B5E3C; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; }
		.hv-topic-body { font-size: 1.02rem; line-height: 1.7; margin-bottom: 40px; }
		.hv-reply-gate { background: #F3E9DA; border-left: 3px solid #C9A052; border-radius: 8px; padding: 20px 24px; margin-bottom: 30px; text-align: center; }
		.hv-reply-gate p { margin: 0; color: #1C3A2A; }

		/* WordPress's default comment markup, restyled */
		.hv-topic-wrap .comments-title,
		.hv-topic-wrap #reply-title { font-family: 'Montserrat', sans-serif; font-weight: 700; color: #1C3A2A; font-size: 1.2rem; }
		.hv-topic-wrap .comment-list { list-style: none; margin: 0; padding: 0; }
		.hv-topic-wrap .comment-list .children { list-style: none; margin: 0 0 0 32px; padding: 0; }
		.hv-topic-wrap .comment-body { background: #FAF8F4; border-radius: 8px; padding: 16px 20px; margin-bottom: 16px; }
		.hv-topic-wrap .comment-author .fn { font-family: 'Montserrat', sans-serif; font-weight: 700; color: #1C3A2A; font-style: normal; }
		.hv-topic-wrap .comment-metadata { font-size: 0.78rem; color: #4A5568; margin-bottom: 8px; }
		.hv-topic-wrap .comment-content p { margin: 0; font-size: 0.95rem; }
		.hv-topic-wrap .comment-reply-link { font-size: 0.78rem; color: #4DAEAF; text-decoration: none; }
		.hv-topic-wrap #commentform input[type="text"],
		.hv-topic-wrap #commentform input[type="email"],
		.hv-topic-wrap #commentform textarea {
			width: 100%; padding: 10px 12px; border: 1px solid #C9BFAE; border-radius: 6px;
			font-family: 'Lato', sans-serif; font-size: 0.95rem; box-sizing: border-box; margin-bottom: 12px;
		}
		.hv-topic-wrap #commentform textarea { min-height: 120px; }
		.hv-topic-wrap #commentform .form-submit input {
			background: #C9A052; color: #1C3A2A; border: none; border-radius: 6px;
			font-family: 'Montserrat', sans-serif; font-weight: 700; padding: 12px 24px; cursor: pointer;
		}
	</style>

	<div class="ij-section">
		<div class="hv-topic-wrap">

			<?php if ( $category_name ) : ?>
				<div class="hv-topic-meta">
					<span class="hv-topic-cat"><?php echo esc_html( $category_name ); ?></span>
					&middot; posted by <?php the_author(); ?> &middot; <?php echo esc_html( get_the_date() ); ?>
				</div>
			<?php endif; ?>

			<div class="hv-topic-body">
				<?php the_content(); ?>
			</div>

			<?php if ( ! $is_logged_in ) : ?>
				<div class="hv-reply-gate">
					<p>You'll need an account to reply. <a href="/healing-voices/">Log in or sign up</a>.</p>
				</div>
			<?php elseif ( ! $is_verified ) : ?>
				<div class="hv-reply-gate">
					<p>Verify your email to reply — check your inbox for the link we sent when you registered.</p>
				</div>
			<?php endif; ?>

			<?php comments_template(); ?>

		</div>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
