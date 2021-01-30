<?php
/**
 * The main theme class for the 2021 theme.
 *
 * @package JMichaelWard\Theme2021
 */

namespace JMichaelWard\Theme2021;

use WebDevStudios\OopsWP\Structure\ServiceRegistrar;
use WebDevStudios\OopsWP\Utility\Hookable;
use \WP_Theme;

/**
 * Class Theme
 *
 * @TODO Flesh out the theme's service registration.
 */
class Theme extends ServiceRegistrar implements Hookable {
	/**
	 * Theme details.
	 *
	 * @var string
	 */
	private $details;

	/**
	 * Theme services.
	 *
	 * @var array
	 */
	protected $services = [
		ScriptHandler::class,
		TemplateHooks::class,
	];

	/**
	 * Theme constructor.
	 *
	 * @param WP_Theme  $details   The theme details.
	 */
	public function __construct( WP_Theme $details ) {
		$this->details = $details;
	}

	/**
	 * Run the plugin.
	 */
	public function run() {
		parent::run();
		$this->register_hooks();
	}

	/**
	 * Register hooks with WordPRess.
	 */
	public function register_hooks() {
		add_action( 'after_setup_theme', function() {
			add_theme_support( 'title-tag' );
			add_theme_support( 'post-thumbnails' );
		} );
	}
}
