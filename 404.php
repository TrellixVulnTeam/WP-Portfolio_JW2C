<?php
/**
 * The single
 */

get_header();
?>

<?php
get_template_part(
	'partials/main-hero',
	'main-hero',
	array(
		'title'      => 'Matthew Oakley - Web Developer',
		'excerpt'    => '',
		'hero_class' => 'is-small',
	),
);
?>

<div class="container is-max-desktop p-3 mb-5 mt-5 fade-in">
	<div class="columns is-multiline">
		<div class="column is-full">
			<?php
				printf(
					'<div class="column is-12 has-text-centered">
						<h2 class="title">Sorry? We could not find what you are looking for?</h2>
					</div>'
				);
			?>

			<p>Not sure how you got here? Expecting something different. Try contacting me directly to see if I can help with your query.</p>
		</div>
	</div>
</div>

<?php
get_template_part(
	'partials/search-cta',
	'search-cta',
	array(),
);
?>

<?php get_footer(); ?>
