<?php
/**
 * The functions. ooooooo!!
 *
 * @package Portfolio
 */

require_once get_stylesheet_directory() . '/app/scripts-styles/class-portfolio-enqueue.php';

/**
 * Get an Icon URL
 */
function get_icon_url( string $icon ) {
	return get_stylesheet_directory_uri() . '/resources/icons/' . $icon;
}
