
<?php get_header(); ?>

<div class="box content">
	
	<?php if ( have_posts() ) : ?>

	<div id="archive-view">
		
		<?php if ( is_category() ) : ?>
		<div class="archive-title">
			<?php _e( 'Posts Category: ', 'diy' ); ?>
			<?php single_cat_title(); ?>
		</div>

		<?php elseif ( is_tag() ) : ?>
		<div class="archive-title">
			<?php _e( 'Posts tagged: ', 'diy' ); ?>
			<?php single_tag_title(); ?>
		</div>

		<?php elseif ( is_author() ) : ?>
		<div class="archive-title">
			<?php _e( 'Posts by: ', 'diy' ); ?>
			<?php 
				the_post(); // initialize posts
				echo get_the_author();
				rewind_posts(); // rewind posts
			?>
		</div>

		<?php elseif ( is_day() ) : ?>
		<div class="archive-title">
			<?php _e( 'Daily archives: ', 'diy' ); ?>
			<?php the_time( 'l, F j, Y' ); ?>
		</div>

		<?php elseif ( is_month() ) : ?>
		<div class="archive-title">
			<?php _e( 'Monthly archives: ', 'diy' ); ?>
			<?php the_time( 'FY' ); ?>
		</div>

		<?php elseif ( is_year() ) : ?>
		<div class="archive-title">
			<?php _e( 'Yearly archives: ', 'diy' ); ?>
			<?php the_time( 'Y' ); ?>
		</div>

		<?php endif; ?>

	</div>
	<!-- /#archive-view -->

	<?php while ( have_posts() ) : the_post(); ?>

	<div <?php post_class(); ?>>
		<h1>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		<?php the_excerpt(); ?>
	</div>

	<?php endwhile; ?>

	<div class="nav nav-post nav-archive">
		<div class="prev">
			<?php prev_posts_link(); ?>
		</div>
		<div class="next">
			<?php next_posts_link(); ?>
		</div>
	</div>

	<?php else : ?>

	<?php get_template( 'inc/not-found' ); ?>

	<?php endif; ?>

</div>
<!-- /.content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
