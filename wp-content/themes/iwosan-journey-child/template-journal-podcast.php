<?php
/**
 * Template Name: Iwosan Journal Podcast
 * Description: Custom coded Journal & Podcast page for Iwosan Journey's
 */

$episode_thumb = 'https://iwosanjourney.com/wp-content/uploads/2026/07/Still_That_Woman-Podcast-Icon-scaled.png';

get_header();
?>

<div class="ij-image-banner">
	<img src="https://iwosanjourney.com/wp-content/uploads/2026/07/IL-Logo-Banner-scaled.png" alt="Iwosan Journey's — Guiding you back to you">
</div>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<div class="ij-section">

	<p>Conversations and reflections for the journey — real talk on advocacy, health, and reclaiming your power through life's transitions.</p>

	<div class="ij-eyebrow">The Podcast</div>
	<h2>Still That Woman</h2>

	<div class="ij-podcast-host">
		<img src="https://iwosanjourney.com/wp-content/uploads/2026/07/andrea-photo-resized.jpg" alt="Andrea Peaten-Headen">
		<div>
			<div class="ij-podcast-host-name">Andrea Peaten-Headen</div>
			<div class="ij-podcast-host-role">Host &amp; Founder</div>
		</div>
	</div>

	<p>Honest conversations about health, global travel, and reclaiming your power through life's shifts. Experts provide the facts; community members share their lived experiences.</p>

	<div class="ij-quote">"You're not crazy. You're not alone… and you are Still That Woman."</div>

	<div class="ij-episode-list">
		<div class="ij-episode-row">
			<div class="ij-episode-thumb"><img src="<?php echo esc_url( $episode_thumb ); ?>" alt="Still That Woman"></div>
			<div class="ij-episode-info">
				<div class="ij-ep-title">Why No One Told Us About Perimenopause</div>
				<div class="ij-ep-meta">42 min · The Beginning</div>
			</div>
			<div class="ij-episode-play"><span>&#9654;</span></div>
		</div>
		<div class="ij-episode-row">
			<div class="ij-episode-thumb"><img src="<?php echo esc_url( $episode_thumb ); ?>" alt="Still That Woman"></div>
			<div class="ij-episode-info">
				<div class="ij-ep-title">A Husband's Honest Take: LaDon's Story</div>
				<div class="ij-ep-meta">38 min · Partners in Transition</div>
			</div>
			<div class="ij-episode-play"><span>&#9654;</span></div>
		</div>
		<div class="ij-episode-row">
			<div class="ij-episode-thumb"><img src="<?php echo esc_url( $episode_thumb ); ?>" alt="Still That Woman"></div>
			<div class="ij-episode-info">
				<div class="ij-ep-title">Medical Gaslighting Is Real — Here's What to Do</div>
				<div class="ij-ep-meta">51 min · Self-Advocacy</div>
			</div>
			<div class="ij-episode-play"><span>&#9654;</span></div>
		</div>
		<div class="ij-episode-row">
			<div class="ij-episode-thumb"><img src="<?php echo esc_url( $episode_thumb ); ?>" alt="Still That Woman"></div>
			<div class="ij-episode-info">
				<div class="ij-ep-title">Is Medical Travel Right for You?</div>
				<div class="ij-ep-meta">44 min · Global Health</div>
			</div>
			<div class="ij-episode-play"><span>&#9654;</span></div>
		</div>
		<div class="ij-episode-row">
			<div class="ij-episode-thumb"><img src="<?php echo esc_url( $episode_thumb ); ?>" alt="Still That Woman"></div>
			<div class="ij-episode-info">
				<div class="ij-ep-title">Men's Health: The Conversation We're Not Having</div>
				<div class="ij-ep-meta">47 min · Men's Vitality</div>
			</div>
			<div class="ij-episode-play"><span>&#9654;</span></div>
		</div>
	</div>

	<div class="ij-platform-btns">
		<a href="#" class="ij-platform-btn">Listen on Apple Podcasts</a>
		<a href="#" class="ij-platform-btn">Listen on Spotify</a>
	</div>

	<div class="ij-eyebrow-journal">The Journal</div>
	<h2>Reflections &amp; resources</h2>
	<p>Written pieces are on the way, covering the same ground the podcast does — one topic at a time.</p>

	<div class="ij-journal-teasers">
		<div class="ij-journal-teaser">
			<h3>Advocacy</h3>
			<p>Coming soon — practical guidance for navigating clinical spaces with confidence.</p>
		</div>
		<div class="ij-journal-teaser">
			<h3>Health</h3>
			<p>Coming soon — grounded reflections on men's health and mental wellness.</p>
		</div>
		<div class="ij-journal-teaser">
			<h3>Experiences</h3>
			<p>Coming soon — stories from the road: medical travel, retreats, and gatherings.</p>
		</div>
	</div>

</div>

<div class="ij-newsletter-cta">
	<h2>Deep dives delivered to your inbox</h2>
	<p>No fluff, just actionable guidance — join the list for new episodes and journal entries as they drop.</p>
	<a href="https://menowell.kit.com/17a0e58545" class="ij-btn-gold">Subscribe</a>
</div>

<?php get_footer(); ?>
