<?php
/**
 * The home page
 *
 * @package Portoflio
 */
get_header();

$featured = get_posts(
	array(
		'post_type'   => 'post',
		'post_status' => 'publish',
		'numberposts' => 6,
	)
);

get_template_part(
	'partials/main-hero',
	'main-hero',
	array(
		'title'      => get_the_title(),
		'excerpt'    => 'Hi, my name is Matt! I am a WordPress backend developer with 3+ years experience in the WordPress environment.',
		'hero_class' => '',
	),
);

$terms = get_terms(
	array(
		'taxonomy'   => 'category',
		'hide_empty' => false,
	)
);
?>

<div class="fade-in">
	<div class="container is-max-desktop p-3">
		<div class="columns is-multiline">
			<div class="column is-full">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<?php if ( $featured ) : ?>
		<div class="container is-max-desktop p-3">
			<h2 class="title is-2">Featured Articles</h2>
			<div class="columns is-multiline">
				<?php foreach ( $featured as $post ) : ?>
					<div class="column is-one-third">
						<?php
							get_template_part(
								'partials/featured-card',
								'featured-card',
								array(
									'title'     => esc_html( $post->post_title ),
									'permalink' => get_permalink( $post->ID ),
								),
							);
						?>
					</div>
				<?php endforeach; ?>

				<!-- <div class="column is-full">
					<a class="button is-primary is-pulled-right">View All Articles</a>
				</div> -->
			</div>
		</div>
	<?php endif; ?>

	<?php
	get_template_part(
		'partials/search-cta',
		'search-cta',
		array(),
	);
	?>

</div>

<?php if ( $terms ) : ?>
	<div class="container is-max-desktop p-3 mt-5 mb-5">
		<h2 class="title is-2">Categories</h2>
		<div class="columns is-multiline">
			<div class="column is-full">
				<?php foreach ( $terms as $term ) : ?>
					<a class="pill" href="<?php echo esc_url( get_term_link( $term->term_id ) ); ?>"><?php esc_html_e( $term->name ); ?></a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
