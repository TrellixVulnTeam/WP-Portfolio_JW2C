<?php
/**
 * The main hero
 *
 * @package Portfolio
 */

$title      = $args['title'] ?? '';
$excerpt    = $args['excerpt'] ?? '';
$hero_class = $args['hero_class'] ?? 'is-meduim';
$hide_icons = $args['hide_icons'] ?? false;
?>
<section class="hero <?php echo esc_attr( $hero_class ); ?> is-primary mb-5">
	<div class="hero-head">
		<header class="navbar">
			<div class="container">
				<div id="navbarMenuHeroC" class="navbar-menu">
					<div class="navbar-end">
						<a class="navbar-item is-active" href="<?php echo esc_url( get_site_url() ); ?>">
							Home
						</a>
					</div>
				</div>
			</div>
		</header>
	</div>

	<div class="hero-body">
		<h1 class="title">
			<?php echo esc_html( $title ); ?>
		</h1>
		<div class="sub-title">
			<?php echo esc_html( $excerpt ); ?>
		</div>
	</div>

	<div class="hero-foot">
		<div class="container">
			<?php if ( ! $hide_icons ) : ?>
				<span class="icon-text">
					<a href="https://www.linkedin.com/in/matt-oakley-2aabb6143/" class="mr-2 ml-2" target="_blank">
						<span class="icon">
							<img src="<?php echo esc_url( get_icon_url( 'socials/linkedin-white.svg' ) ); ?>" alt="linkedin-icon"/>
						</span>
					</a>

					<a href="https://www.instagram.com/matt.oakley.39/" class="mr-2 ml-2" target="_blank">
						<span class="icon">
							<img src="<?php echo esc_url( get_icon_url( 'socials/instagram-white.svg' ) ); ?>" alt="instagram-icon"/>
						</span>
					</a>

					<a href="https://wordpress.org/" class="mr-2 ml-2" target="_blank">
						<span class="icon">
							<img src="<?php echo esc_url( get_icon_url( 'socials/wordpress-white.svg' ) ); ?>" alt="wordpress-icon"/>
						</span>
					</a>

					<a href="https://github.com/matt-oakley-dev" class="mr-2 ml-2" target="_blank">
						<span class="icon">
							<img src="<?php echo esc_url( get_icon_url( 'socials/github-white.svg' ) ); ?>" alt="github-icon"/>
						</span>
					</a>

				</span>
			<?php endif; ?>
		</div>
	</div>
</section>
