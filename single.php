<?php
/**
 * The single
 *
 * @package Portfolio
 */

global $post;

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

$terms = get_the_terms( get_the_ID(), 'category' );
?>

<div class="fade-in">
	<div class="container is-max-desktop p-3">
		<div class="columns is-multiline">
			<div class="column is-full">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<div class="container is-max-desktop p-3 mt-5 mb-5 border-primary-top">
		<div class="columns is-multiline mt-5">
			<div class="column is-2">
				<?php echo get_avatar( $post->post_author, 120, '', '', array( 'class' => 'border-raduis-70' ) ); ?>
			</div>
			<div class="column is-10">
				<h4 class="title"><?php esc_html_e( get_the_author_meta( 'display_name', $post->post_author ) ); ?></h4>
			</div>
			<div class="column is-full">
				<?php foreach ( $terms as $term ) : ?>
					<a class="pill" href="<?php echo esc_url( get_term_link( $term->term_id ) ); ?>"><?php esc_html_e( $term->name ); ?></a>
				<?php endforeach; ?>
			</div>
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
