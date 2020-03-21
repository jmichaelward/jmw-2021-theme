<?php
/**
 * Bootstrap file for the 2020 theme's functionality.
 */

use JMichaelWard\Theme2020\Theme;

$autoload = __DIR__ . '/vendor/autoload.php';

if ( is_readable( $autoload ) ) {
	require_once $autoload;
}

try {
	$theme = new Theme( __FILE__ );
	$theme->run();
} catch( Error $e ) {
	add_action( 'admin_notices', function() {
		?>
		<div class="notice notice-error">
			<p><?php esc_html_e( 'Cannot locate PHP class files for jmw-2020-theme.', 'jmw-2020' ); ?></p>
		</div>
		<?php
	} );
}
