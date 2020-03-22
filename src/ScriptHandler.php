<?php
/**
 * Service for registering theme scripts and styles.
 *
 * @package JMichaelWard\Theme2020
 */

namespace JMichaelWard\Theme2020;

use WebDevStudios\OopsWP\Structure\Service;

/**
 * Class ScriptHandler
 *
 * @package JMichaelWard\Theme2020
 */
class ScriptHandler extends Service {
	/**
	 * Constant path to the primary theme stylesheet.
	 */
	const THEME_CSS_PATH = '/assets/dist/css/main.css';

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
			'jmw-2020-theme-style',
			get_template_directory_uri() . self::THEME_CSS_PATH,
			[],
			filemtime( get_stylesheet_directory() . self::THEME_CSS_PATH )
		);
	}
}