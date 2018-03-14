<?php get_header(); ?>


	<h1><span>Интересно знать</span></h1>

	<div class="site-content-wrap contaner clear-self">

	<style type="text/css">
		.wp-post-image {
			float: left;
			margin: 5px;
		}
	</style>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
	<div>
					<?php the_post_thumbnail() ?>
					<b><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b>&nbsp;<?php echo get_the_date(); ?>
					<br><br>
					<?php the_excerpt(); ?><br>
					<br clear="all">
				</div>
<?php endwhile; ?>
<?php endif; ?>
	</div>

<?php get_footer(); ?>