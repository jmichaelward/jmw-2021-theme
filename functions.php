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

	/**
	 * Render pagination for posts pages.
	 *
	 * @param \WP_Query $query The WP_Query object.
	 */
	function pagination( $query ) {
		?>
		<div class="pagination">
			<?php
			$big = 999999999; // need an unlikely integer.

			echo paginate_links( [ // @codingStandardsIgnoreLine
				                     'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				                     'format'  => '?paged=%#%',
				                     'current' => max( 1, get_query_var( 'paged' ) ),
				                     'total'   => $query->max_num_pages,
			                     ] );
			?>
		</div>
		<?php
	}
	
	$theme = new Theme( wp_get_theme() );
	$theme->run();
} catch( Error $e ) {
	add_action( 'admin_notices', function() {
		?>
		<div class="notice notice-error">
			<p><?php esc_html_e( 'Cannot locate PHP class files for jmw-2020-theme.', 'jmw-2020-theme' ); ?></p>
		</div>
		<?php
	} );
}
