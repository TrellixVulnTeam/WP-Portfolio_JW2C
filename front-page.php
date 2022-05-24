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
				<p>
					<strong class="has-text-primary">Hi, my name is Matt!</strong> 
					I am a WordPress backend developer with 3+ years experience in the <a href="https://www.wordpress.org">WordPress</a> environment. 
					I have worked on a multitude of projects for some world-leading organizations.
					I am a passionate individual who loves to travel, play sport and code. 
					I have worked in lots of different places and on lots of different projects. 
					I have even contributed to WordPress core! Please feel free to explore my blog where I write down all my related thoughts about places I have been and work I think is worth sharing.
				</p>
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

<?php get_footer(); ?>
