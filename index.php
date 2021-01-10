<?php
/**
 * Default template file.
 *
 * @package JMichaelWard\Theme2021
 */

?>

<?php get_header(); ?>

<div class="site-container__inner">
	<main class="site-main">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; ?>
	</main>

	<div class="sidebar-container sidebar-container--main">
		<?php get_sidebar(); ?>
	</div>

	<div class="sidebar-container sidebar-container--supplemental">
		<?php get_sidebar( 'links' ); ?>
	</div>
</div>

<?php get_footer(); ?>
