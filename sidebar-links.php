<?php
/**
 * Template for the essential links sidebar.
 *
 * @package JMichaelWard\Theme2020
 */

?>

<aside class="sidebar sidebar--links">
	<h2><?php esc_html_e( 'Elsewhere Online', 'jmw-2020-theme' ); ?></h2>
	<?php wp_nav_menu( [ 'menu' => 'external-links-navigation' ] ); ?>
</aside>
