<?php
/**
 * The Portfolio scripts and styles
 *
 * @package Portfolio
 */

/**
 * The Enqueue class
 */
class Portfolio_Enqueue {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'portfolio_enqueue' ) );
	}

	/**
	 * Enqueue the theme scripts and styles
	 */
	public function portfolio_enqueue() {
		wp_enqueue_style( 'bulma', get_stylesheet_directory_uri() . '/resources/css/style.css' );
	}
}

new Portfolio_Enqueue();
