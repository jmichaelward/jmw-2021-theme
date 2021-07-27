<?php
/**
 * Service for registering template hooks.
 */

namespace JMichaelWard\Theme2021;

use WebDevStudios\OopsWP\Structure\Service;
use WP_Query;

/**
 * Class TemplateHooks
 *
 * @package JMichaelWard\Theme2021
 */
class TemplateHooks extends Service {
	/**
	 * Name of the post content loop action.
	 */
	const ACTION_POST_CONTENT_LOOP = __NAMESPACE__ . '\post_content_loop';

	/**
	 * Register service with WordPress.
	 */
	public function register_hooks() {
		// add_filter( 'pre_get_posts', [ $this, 'filter_front_page_loop' ] );
		add_action( self::ACTION_POST_CONTENT_LOOP, [ $this, 'post_content_loop_callback' ] );
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

	/**
	 * This callback action handles outputting post content loop markup to the theme.
	 */
	public function post_content_loop_callback() {
		if ( is_404() ) {
			get_template_part( 'partials/content', '404' );
			return;
		}

		while ( have_posts() ) {
			the_post();
			get_template_part( 'content' );
		}
	}
}
