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
		<?php do_action( 'JMichaelWard\Theme2021\post_content_loop' ); ?>
	</main>

	<div class="sidebar-container sidebar-container--main">
		<?php get_sidebar(); ?>
	</div>

	<div class="sidebar-container sidebar-container--supplemental">
		<?php get_sidebar( 'links' ); ?>
	</div>
</div>

<?php get_footer(); ?>
