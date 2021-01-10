<?php
/**
 * Template for the essential links sidebar.
 *
 * @package JMichaelWard\Theme2021
 */

?>

<aside class="sidebar sidebar--links">
	<h2><?php esc_html_e( 'Elsewhere Online', 'jmw-2021-theme' ); ?></h2>
	<?php wp_nav_menu( [ 'menu' => 'external-links-navigation' ] ); ?>
</aside>
