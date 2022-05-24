<?php
/**
 * Pagination partial
 *
 * @package Elastic
 */

global $wp_query;
?>

<div class="section navigation is-flex is-hcentered is-vcentered">
	<div class="prev">
		<?php
		if ( get_previous_posts_link() ) :
			printf(
				'<a href="%1$s" class="button is-primary m-1">
					<svg fill="#fff" aria-hidden="true" width="16px" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M229.9 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L94.569 282H436c6.627 0 12-5.373 12-12v-28c0-6.627-5.373-12-12-12H94.569l155.13-155.13c4.686-4.686 4.686-12.284 0-16.971L229.9 38.101c-4.686-4.686-12.284-4.686-16.971 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971L212.929 473.9c4.686 4.686 12.284 4.686 16.971-.001z"></path></svg>
				</a>',
				esc_url( get_previous_posts_page_link() )
			);
		else :
			printf(
				'<span class="button is-primary button-disabled m-1">
					<svg fill="#fff" aria-hidden="true" width="16px" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M229.9 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L94.569 282H436c6.627 0 12-5.373 12-12v-28c0-6.627-5.373-12-12-12H94.569l155.13-155.13c4.686-4.686 4.686-12.284 0-16.971L229.9 38.101c-4.686-4.686-12.284-4.686-16.971 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971L212.929 473.9c4.686 4.686 12.284 4.686 16.971-.001z"></path></svg>
				</span>'
			);
		endif;
		?>
	</div>
	<div class="next">
		<?php
		if ( get_next_posts_link() ) :
			printf(
				'<a href="%1$s" class="button is-primary m-1">
					<svg fill="#fff" style="transform:rotate(180deg);" aria-hidden="true" width="16px" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M229.9 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L94.569 282H436c6.627 0 12-5.373 12-12v-28c0-6.627-5.373-12-12-12H94.569l155.13-155.13c4.686-4.686 4.686-12.284 0-16.971L229.9 38.101c-4.686-4.686-12.284-4.686-16.971 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971L212.929 473.9c4.686 4.686 12.284 4.686 16.971-.001z"></path></svg>
				</a>',
				esc_url( get_next_posts_page_link( $wp_query->max_num_pages ) )
			);
		else :
			printf(
				'<span class="button is-primary button-disabled m-1">
					<svg fill="#fff" style="transform:rotate(180deg);" aria-hidden="true" width="16px" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M229.9 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L94.569 282H436c6.627 0 12-5.373 12-12v-28c0-6.627-5.373-12-12-12H94.569l155.13-155.13c4.686-4.686 4.686-12.284 0-16.971L229.9 38.101c-4.686-4.686-12.284-4.686-16.971 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971L212.929 473.9c4.686 4.686 12.284 4.686 16.971-.001z"></path></svg>
				</span>'
			);
		endif;
		?>
	</div>
</div>
