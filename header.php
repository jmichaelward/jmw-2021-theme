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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<header class="site-header">
			<div class="site-header__inner">
				<?php wp_nav_menu( [ 'menu' => 'primary-navigation' ] ); ?>
			</div>
		</header>
