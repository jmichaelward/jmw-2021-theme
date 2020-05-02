<?php
/**
 * Service for registering template hooks.
 */

namespace JMichaelWard\Theme2020;

use WebDevStudios\OopsWP\Structure\Service;
use WP_Query;

/**
 * Class TemplateHooks
 *
 * @package JMichaelWard\Theme2020
 */
class TemplateHooks extends Service {
	/**
	 * Register service with WordPress.
	 */
	public function register_hooks() {
		// add_filter( 'pre_get_posts', [ $this, 'filter_front_page_loop' ] );
	}

	/**
	 * Alter the number of posts which render on the front page.
	 *
	 * @param WP_Query $query The WP_Query instance.
	 *
	 * @return WP_Query $query
	 */
	public function filter_front_page_loop( WP_Query $query ) {
		if ( $query->is_home() ) {
			$query->set( 'posts_per_page', 1 );
		}

		return $query;
	}
}
