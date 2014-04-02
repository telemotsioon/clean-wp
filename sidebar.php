<aside id="sidebar">
	<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
	
	<div id="archives" class="widget">
		<h3><?php _e( 'Archives', 'nortal' ); ?></h3>
		<ul>
			<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
		</ul>
	</div>
	
	<?php endif; ?>
</aside>
