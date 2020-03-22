<?php
/**
 * Default footer template.
 *
 * @package JMichaelWard\Theme2020
 */

?>
</div><!-- .site-body -->
<footer class="site-footer">
	<div class="site-footer__inner">
		<p class="site-footer__copyright">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
			<a href="https://github.com/jmichaelward" rel="me">
				<?php esc_html_e( 'J. Michael Ward', 'jmw-2020' ); ?>
			</a>
		</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
