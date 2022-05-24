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
		'title'      => get_the_title(),
		'excerpt'    => get_the_excerpt(),
		'hero_class' => '',
	),
);
?>

<div class="container is-max-desktop p-3 fade-in">
	<div class="columns is-multiline">
		<div class="column is-full">
			<?php the_content(); ?>
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
