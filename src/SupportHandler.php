<?php

namespace JMichaelWard\Theme2021;

use WebDevStudios\OopsWP\Structure\Service;

class SupportHandler extends Service {
	/**
	 * Register theme support.
	 */
	public function register_hooks() {
		add_action( 'after_setup_theme', function() {
			add_theme_support( 'title-tag' );
			add_theme_support( 'post-thumbnails' );
		} );
	}
}
