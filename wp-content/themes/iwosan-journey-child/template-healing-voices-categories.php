<?php
/**
 * Template Name: Iwosan Healing Voices — Categories
 * Description: Browse page showing all 4 Healing Voices categories and their
 * subcategories at once. Each subcategory links to its taxonomy archive
 * (where topics within it will appear once topic creation is built).
 */

get_header();

$main_categories = get_terms( array(
	'taxonomy'   => 'hv_category',
	'parent'     => 0,
	'hide_empty' => false,
) );

$cat_colors = array(
	'Menopause'       => '#C17A7A',
	"Men's Health"    => '#4DAEAF',
	'Maternal Health' => '#8B5E3C',
	'Mental Health'   => '#1C3A2A',
);

?>

<section class="ij-page-banner">
	<h1>Healing Voices — Categories</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<style>
	.hv-cat-intro { text-align: center; max-width: 640px; margin: 0 auto 40px; }
	.hv-cat-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 28px; }
	.hv-cat-card { background: #FFFFFF; border-radius: 12px; padding: 28px 26px; box-shadow: 0 12px 30px rgba(10,31,68,0.06); border-top: 4px solid; }
	.hv-cat-card h2 { font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 1.3rem; margin: 0 0 16px; }
	.hv-cat-sublist { list-style: none; margin: 0; padding: 0; }
	.hv-cat-sublist li { margin-bottom: 10px; }
	.hv-cat-sublist a {
		display: block;
		padding: 10px 14px;
		background: #FAF8F4;
		border-radius: 6px;
		color: #1C3A2A;
		text-decoration: none;
		font-size: 0.92rem;
		transition: background 0.15s;
	}
	.hv-cat-sublist a:hover { background: #F3E9DA; }

	@media (max-width: 760px) {
		.hv-cat-grid { grid-template-columns: 1fr; }
	}
</style>

<div class="ij-section">

	<p class="hv-cat-intro">Browse by topic to find the conversation that fits where you are right now — or head back to <a href="/healing-voices/">Healing Voices</a> to sign up and start one yourself.</p>

	<div class="hv-cat-grid">
		<?php foreach ( $main_categories as $main_cat ) :
			$color = $cat_colors[ $main_cat->name ] ?? '#8B5E3C';
			$subcategories = get_terms( array(
				'taxonomy'   => 'hv_category',
				'parent'     => $main_cat->term_id,
				'hide_empty' => false,
			) );
			?>
			<div class="hv-cat-card" style="border-top-color: <?php echo esc_attr( $color ); ?>;">
				<h2 style="color: <?php echo esc_attr( $color ); ?>;"><?php echo esc_html( $main_cat->name ); ?></h2>
				<ul class="hv-cat-sublist">
					<?php foreach ( $subcategories as $sub_cat ) : ?>
						<li><a href="<?php echo esc_url( get_term_link( $sub_cat ) ); ?>"><?php echo esc_html( $sub_cat->name ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endforeach; ?>
	</div>

</div>

<?php get_footer(); ?>
