<?php
/**
 * The main theme class for the 2020 theme.
 *
 * @package JMichaelWard\Theme2020
 */

namespace JMichaelWard\Theme2020;

use WebDevStudios\OopsWP\Structure\ServiceRegistrar;

/**
 * Class Theme
 *
 * @TODO Flesh out the theme's service registration.
 */
class Theme extends ServiceRegistrar {
	/**
	 * Theme services.
	 *
	 * @var array
	 */
	protected $services = [
		ScriptHandler::class,
	];

	/**
	 * Theme constructor.
	 *
	 * @param $file_path
	 */
	public function __construct( $file_path ) {
		$this->file_path = $file_path;
	}
}
