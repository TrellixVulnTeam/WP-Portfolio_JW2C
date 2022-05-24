<div class="card border pointer" onclick="window.location.href='<?php echo esc_url( $args['permalink'] ); ?>'">
	<header class="card-header card-header-big-bt">

		<p class="card-header-title">
			<?php esc_html_e( $args['title'] ); ?>
		</p>
		<a class="" aria-label="more options">
			<span class="icon">
				<img src="<?php echo esc_url( get_icon_url( 'arrow-right-primary.svg' ) ); ?>"/>
			</span>
		</a>
	</header>
</div>
