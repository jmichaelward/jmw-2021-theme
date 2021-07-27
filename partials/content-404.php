<?php
/**
 * Template content for the 404 page.
 *
 * @package JMichaelWard\JmwTheme2021
 */

$content = [
	[
		esc_html__( "It appears that we can't find the page that you are looking for.", 'jmw-2021-theme' ),
		esc_html__( "Most likely, it never existed, but it's also possible that it was removed at some point.", 'jmw-2021-theme' ),
		sprintf(
			'%s <a href="%s">%s</a> %s',
			esc_html__( "Perhaps you'd like to", 'jmw-2021-theme'),
			home_url(),
			esc_html__( 'go home', 'jmw-2021-theme'),
			esc_html__( 'and try again?', 'jmw-2021-theme' )
		)
	]
];

?>

<article <?php post_class(); ?>>
	<header class="entry__hdr">
		<h1 class="site-main__hd"><?php echo esc_html( 'Well this is awkward...', 'jmw-2021-theme' ); ?></h1>
	</header><!-- .entry__hdr -->

	<div class="entry__content-container">
		<div class="entry__content">
			<?php foreach ( $content as $paragraph ) : ?>
				<p><?php echo implode( ' ', $paragraph ); // @codingStandardsIgnoreLine ?></p>
			<?php endforeach; ?>
		</div>
	</div><!-- .entry__content-container -->
</article>
