<?php
/**
 * Default footer template.
 *
 * @package JMichaelWard\Theme2021
 */

?>

<footer class="site-footer">
	<div class="site-footer__inner">
		<p class="site-footer__copyright">&copy;2009-<?php echo esc_html( gmdate( 'Y' ) ); ?>
			<?php esc_html_e( 'J. Michael Ward', 'jmw-2021-theme' ); ?>
		</p>
	</div>
	<?php wp_footer(); ?>
</footer>
</div><!-- .container -->
</body>
</html>
