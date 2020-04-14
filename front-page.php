<?php
/**
 * Front page of the site.
 *
 * @package JMichaelWard\Theme2020
 */
?>

<?php get_header(); ?>

<div class="sidebar-container">
	<?php get_sidebar(); ?>
</div>

<main class="site-main">
	<?php while ( have_posts() ): the_post(); ?>
		<a href="<?php the_permalink(); ?>"><?php the_title( '<h2>', '</h2>' ); ?></a>
	<?php endwhile; ?>
</main>

<div class="sidebar-container">
	<?php get_sidebar( 'right' ); ?>
</div>
<?php get_footer(); ?>
