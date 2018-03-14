<?php get_header(); ?>


<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
	<h1><span><?php the_title(); ?></span></h1>

	<div class="site-content-wrap contaner clear-self">

	<style type="text/css">
		.n-thumb {
			float: left;
			margin: 5px;
		}
	</style>
	<a href="/novosti">« Назад</a><br><br>
	<div>
		<?php the_content(); ?>
	</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>