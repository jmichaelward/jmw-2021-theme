<?php
/**
 * Service for registering theme scripts and styles.
 *
 * @package JMichaelWard\Theme2021
 */

namespace JMichaelWard\Theme2021;

use WebDevStudios\OopsWP\Structure\Service;

/**
 * Class ScriptHandler
 *
 * @package JMichaelWard\Theme2021
 */
class ScriptHandler extends Service {
	/**
	 * Constant path to the primary theme stylesheet.
	 */
	const THEME_CSS_PATH = '/assets/dist/main.css';

	/**
	 * Register the the theme script hooks.
	 */
	public function register_hooks() {
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_styles' ] );
	}

	/**
	 * Enqueue this theme's styles.
	 */
	public function enqueue_styles() {
		wp_enqueue_style(
			'jmw-2021-theme-style',
			get_template_directory_uri() . self::THEME_CSS_PATH,
			[],
			filemtime( get_stylesheet_directory() . self::THEME_CSS_PATH )
		);
	}
}
