<?php
/**
 * Default template file.
 *
 * @package JMichaelWard\Theme2020
 */

use function JMichaelWard\Theme2020\includes\pagination;

global $wp_query;
?>

<?php get_header(); ?>

<main class="site-main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; ?>

		<?php if ( get_next_posts_link() || get_previous_posts_link() ) : ?>
			<?php pagination( $wp_query ); ?>
		<?php endif; ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
