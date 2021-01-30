<?php
/**
 * Header template.
 *
 * @package JMW/Theme2018
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/favicon.ico" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php do_action( 'wp_body_open' ); ?>
	<div class="site-container">
		<header class="site-header">
			<div class="site-header__inner">
				<?php wp_nav_menu( [ 'menu' => 'primary-navigation' ] ); ?>
			</div>
		</header>
