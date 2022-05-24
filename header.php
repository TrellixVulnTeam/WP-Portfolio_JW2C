<?php
/**
 * The header
 *
 * @package Portoflio
 */
?>

<!doctype html>
<html>
<head>
	<?php wp_head(); ?>
	<title><?php esc_html_e( get_the_title() ); ?></title>
	<meta name="description" content="Matthew oakleys blog based on WordPress and web development.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<main>
