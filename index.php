
<?php get_header(); ?>

<div class="box content">
	
	<?php if ( have_posts() ) : ?>
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
