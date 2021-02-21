<?php
/**
 * Bootstrap file for the 2021 theme's functionality.
 */

use JMichaelWard\Theme2021\Theme;

$autoload = __DIR__ . '/vendor/autoload.php';

if ( is_readable( $autoload ) ) {
	require_once $autoload;
}

try {
	$theme = new Theme( wp_get_theme() );
	$theme->run();
} catch( Error $e ) {
	add_action( 'admin_notices', function() {
		?>
		<div class="notice notice-error">
			<p><?php esc_html_e( 'Cannot locate PHP class files for jmw-2021-theme.', 'jmw-2021-theme' ); ?></p>
		</div>
		<?php
	} );
}
