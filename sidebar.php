<aside class="sidebar sidebar--main">
	<div class="sidebar__image">
		<?php echo get_avatar( 1, 640, false, 'J. Michael Ward' ); ?>
	</div>

	<div class="sidebar__details">
		<p>
			<a href="<?php echo esc_url( home_url() ); ?>"
			   title="<?php bloginfo( 'name' ); ?>">
				<span><?php bloginfo( 'name' ); ?></span>
			</a>
		</p>
		<p><?php bloginfo( 'description' ); ?></p>
	</div>
</aside>
