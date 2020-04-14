<?php
/**
 * Default footer template.
 *
 * @package JMichaelWard\Theme2020
 */

?>
</div><!-- .site-wrapper -->
<footer class="site-footer">
	<div class="site-footer__inner">
		<p class="site-footer__copyright">&copy;2009-<?php echo esc_html( gmdate( 'Y' ) ); ?>
			<?php esc_html_e( 'J. Michael Ward', 'jmw-2020-theme' ); ?>
		</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
