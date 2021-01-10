<?php
/**
 * The main theme class for the 2021 theme.
 *
 * @package JMichaelWard\Theme2021
 */

namespace JMichaelWard\Theme2021;

use WebDevStudios\OopsWP\Structure\ServiceRegistrar;
use \WP_Theme;

/**
 * Class Theme
 *
 * @TODO Flesh out the theme's service registration.
 */
class Theme extends ServiceRegistrar {
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
}
