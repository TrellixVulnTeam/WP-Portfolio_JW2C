<?php
/**
 * Archive page
 *
 * @package Portoflio
 */

get_header();

$search_term = $_GET['s'] ?? '';

get_template_part(
	'partials/main-hero',
	'main-hero',
	array(
		'title'      => wp_strip_all_tags( get_the_archive_title() ),
		'excerpt'    => '',
		'hero_class' => 'is-small',
		'hide_icons' => true,
	),
);
?>

<div class="container is-max-desktop p-3 fade-in">
	<div class="columns is-multiline is-centered">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
			?>
				<div class="column is-full">
					<?php
						get_template_part(
							'partials/featured-card',
							'featured-card',
							array(
								'title'     => esc_html( get_the_title() ),
								'permalink' => get_permalink( get_the_ID() ),
							),
						);
					?>
				</div>
			<?php endwhile; ?>

			<?php get_template_part( 'partials/pagination', 'pagination' ); ?>

			<?php
				else :
					printf(
						'<div class="column is-12 has-text-centered">
							<h2 class="title">No results found</h2>
							<p>Come back another time to see if we have any updates,<br/>alternatively try a search below.</p>
						</div>'
					);
				endif;
			?>
	</div>
</div>

<?php get_footer(); ?>
