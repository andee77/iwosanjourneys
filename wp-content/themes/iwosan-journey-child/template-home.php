<?php
/**
 * Template Name: Iwosan Home
 * Description: Custom coded home page for Iwosan Journey's
 */

get_header();
?>

<style>
.ij-home { font-family: 'Lato', sans-serif; }

.ij-hero {
	background: #1C3A2A;
	padding: 80px 32px;
	position: relative;
	overflow: hidden;
}
.ij-hero-inner { max-width: 640px; position: relative; z-index: 2; }
.ij-hero h1 {
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	font-size: 42px;
	line-height: 1.2;
	color: #FAF8F4;
	margin: 0 0 20px;
}
.ij-hero p {
	font-size: 17px;
	line-height: 1.7;
	color: #D9CDBB;
	max-width: 480px;
	margin: 0 0 28px;
}
.ij-btn-gold {
	display: inline-block;
	background: #C9A052;
	color: #1C3A2A;
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	font-size: 14px;
	letter-spacing: 0.02em;
	padding: 14px 26px;
	border-radius: 4px;
	text-decoration: none;
}

.ij-path-divider { display: block; width: 100%; height: 40px; }

.ij-section { padding: 64px 32px; max-width: 1080px; margin: 0 auto; }
.ij-story { display: flex; gap: 48px; align-items: center; flex-wrap: wrap; }
.ij-story-text { flex: 1; min-width: 280px; }
.ij-story h2 {
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	font-size: 26px;
	color: #1C3A2A;
	margin: 0 0 16px;
}
.ij-story p { font-size: 15px; line-height: 1.7; color: #3D3D3A; margin: 0 0 16px; }
.ij-story a {
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	font-size: 13px;
	color: #8B5E3C;
	text-decoration: none;
	letter-spacing: 0.02em;
}
img.ij-story-photo {
	width: 280px !important;
	height: 220px !important;
	max-width: 280px !important;
	flex-shrink: 0;
	object-fit: cover !important;
	border-radius: 8px !important;
	display: block;
}

.ij-pillars { background: #4DAEAF; padding: 64px 32px; }
.ij-pillars-inner { max-width: 1080px; margin: 0 auto; }
.ij-pillars h2 {
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	font-size: 24px;
	color: #04342C;
	text-align: center;
	margin: 0 0 40px;
}
.ij-pillar-grid {
	display: flex; flex-wrap: wrap; gap: 24px; justify-content: center;
}
.ij-pillar-card {
	background: rgba(255,255,255,0.15);
	border-radius: 8px;
	padding: 28px;
	width: 300px;
}
.ij-pillar-card h3 {
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	font-size: 17px;
	color: #04342C;
	margin: 0 0 10px;
}
.ij-pillar-card p { font-size: 14px; line-height: 1.6; color: #0A2E2C; margin: 0 0 14px; }
.ij-pillar-card a {
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	font-size: 12px;
	color: #04342C;
	text-decoration: none;
}

.ij-credibility {
	background: #FAF8F4;
	padding: 40px 32px;
	display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;
	text-align: center;
}
.ij-credibility div { font-size: 13px; color: #8B5E3C; line-height: 1.5; }

.ij-menopause {
	background: #F3E9DA;
	padding: 36px 32px;
	display: flex; justify-content: space-between; align-items: center;
	flex-wrap: wrap; gap: 16px;
	max-width: 1080px; margin: 0 auto;
}
.ij-menopause p { font-size: 15px; color: #1C3A2A; margin: 0; max-width: 560px; }
.ij-menopause a {
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	font-size: 13px;
	color: #8B5E3C;
	text-decoration: none;
	white-space: nowrap;
}

.ij-final-cta {
	background: #0A1F44;
	padding: 64px 32px;
	text-align: center;
}
.ij-final-cta h2 {
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	font-size: 24px;
	color: #FAF8F4;
	margin: 0 0 14px;
}
.ij-final-cta p {
	font-size: 15px;
	color: #C9BFAE;
	max-width: 480px;
	margin: 0 auto 28px;
	line-height: 1.7;
}

@media (max-width: 640px) {
	.ij-hero h1 { font-size: 30px; }
	.ij-story, .ij-menopause { flex-direction: column; align-items: flex-start; }
}
</style>

<div class="ij-home">

	<section class="ij-hero">
		<div class="ij-hero-inner">
			<h1>Guiding you back<br>to you.</h1>
			<p>A non-clinical safety net for advocacy, healing, and global wellness experiences — built from lived experience, not theory.</p>
			<a href="#" class="ij-btn-gold">Join the waitlist</a>
		</div>
	</section>

	<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
		<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
	</svg>

	<section class="ij-section">
		<div class="ij-story">
			<div class="ij-story-text">
				<h2>Our story</h2>
				<p>It started at two tables — a hospital conference room, and a grandmother's kitchen table. Both led to the same realization: people navigating major health transitions deserve a safety net that didn't exist yet. Iwosan Journey's was born from that gap, and built to close it.</p>
				<a href="/our-story/">Read our story →</a>
			</div>
			<img class="ij-story-photo" src="https://iwosanjourney.com/wp-content/uploads/2026/07/20231016_092056-scaled.jpg" alt="Andrea Peaten-Headen, Founder of Iwosan Journey's">
		</div>
	</section>

	<section class="ij-pillars">
		<div class="ij-pillars-inner">
			<h2>What we offer</h2>
			<div class="ij-pillar-grid">
				<div class="ij-pillar-card">
					<h3>Advocacy</h3>
					<p>Patient Power Packs, know-your-rights guidance, and practical prep tools that help you walk into any clinical space ready to be heard.</p>
					<a href="/advocacy/">Explore Advocacy →</a>
				</div>
				<div class="ij-pillar-card">
					<h3>Health</h3>
					<p>Grounded, judgment-free education across mental health and men's health — plus a clear path to menopause support.</p>
					<a href="/health/">Explore Health →</a>
				</div>
				<div class="ij-pillar-card">
					<h3>Experiences</h3>
					<p>Vetted global medical travel through our JCI-accredited hospital network, plus live retreats, conferences, and gatherings.</p>
					<a href="/experiences/">Explore Experiences →</a>
				</div>
			</div>
		</div>
	</section>

	<section class="ij-credibility">
		<div><strong>20+ years</strong><br>public health expertise</div>
		<div><strong>JCI-accredited</strong><br>hospital network</div>
		<div><strong>InteleTravel</strong><br>credentialed</div>
	</section>

	<div class="ij-menopause">
		<p>Navigating perimenopause or menopause? Our sister platform, MenoWell, was built specifically for that journey.</p>
		<a href="/menopause/">Visit MenoWell →</a>
	</div>

	<section class="ij-final-cta">
		<h2>Be the first to know</h2>
		<p>Iwosan Journey's is launching soon. Join the waitlist for early access to Patient Power Packs, our first live events, and updates as each part of this ecosystem goes live.</p>
		<a href="#" class="ij-btn-gold">Join the waitlist</a>
	</section>

</div>

<?php get_footer(); ?>
