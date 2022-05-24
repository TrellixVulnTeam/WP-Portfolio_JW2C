<?php
/**
 * The search
 *
 * @package Portoflio
 */

get_header();

$search_term = $_GET['s'] ?? '';

get_template_part(
	'partials/main-hero',
	'main-hero',
	array(
		'title'      => 'Search Results...',
		'excerpt'    => '',
		'hero_class' => 'is-small',
		'hide_icons' => true,
	),
);

?>


<div class="container is-max-desktop p-3">
	<div class="columns is-centered">
		<div class="column is-one-third">
			<form>
				<input type="text" name="s" class="input is-normal" placeholder="Search..." value="<?php esc_html_e( $search_term ); ?>"/>
			</form>
		</div>
	</div>
</div>


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
							<p>Double check your search for typos or spelling errors,<br/>alternatively try a more generic search term.</p>
						</div>'
					);
				endif;
			?>
	</div>
</div>

<?php get_footer(); ?>
