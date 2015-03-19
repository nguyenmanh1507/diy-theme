		<div class="box footer">
			
			<?php 
			if ( is_active_sidebar( 'footer' ) ) : 
				dynamic_sidebar( 'footer' );

			else :
				if ( has_nav_menu( 'footer' ) ) :
					wp_nav_menu( array(
							'theme_location'   => 'footer',
							'container'        => false
						) );	

				endif;
				?>
			<p>
				<?php _e( '&copy;', 'diy' ); ?> <?php echo do_shortcode( '[y]' ); ?> <a href="<?php home_url(); ?>"><?php bloginfo( 'name' ); ?></a> <?php _e( '&bull;', 'diy' ); ?> <a href="<?php bloginfo( 'rss2_url' ); ?>"><?php _e( 'RSS Feed', 'diy' ); ?></a>
			</p>

			<?php endif; ?>

		</div>
		<!-- /.footer -->

	</div>
	<!-- /.container -->
	
	<?php wp_footer(); ?>

</body>
</html>