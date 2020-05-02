<?php
/**
 * Front page of the site.
 *
 * @package JMichaelWard\Theme2020
 */

global $wp_query;
?>

<?php get_header(); ?>

<main class="site-main">
	<h1 class="site-main__hd"><?php esc_html_e( 'Latest News', 'jmw-2020-theme' ); ?></h1>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content' ); ?>
	<?php endwhile; ?>

	<?php if ( get_next_posts_link() || get_previous_posts_link() ) : ?>
		<?php pagination( $wp_query ); ?>
	<?php endif; ?>
</main>

<div class="sidebar-container sidebar-container--main">
	<?php get_sidebar(); ?>
</div>

<div class="sidebar-container sidebar-container--supplemental">
	<?php get_sidebar( 'links' ); ?>
</div>

<?php get_footer(); ?>
