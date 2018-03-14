<?php get_header(); ?>


<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
	<h1><span><?php the_title(); ?></span></h1>
	<div class="site-content-wrap contaner clear-self">
		<?php the_content(); ?>
		<? 
        $post_ID = $post->ID;
    $query = new WP_Query(array('post_parent' => $post_ID, 'post_type' => 'any','orderby' => 'title',
	'order'   => 'ASC',));

    if ($query->have_posts()) { ?>
<div>
   <div class="bottom-wrap-title">
      <span>Вас может заинтересовать</span>
   </div>
   <ul class="g-submenu ">
    <?
      while ($query->have_posts()) { $query->the_post(); ?>
         <li class="g-submenu__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <? } ?>
   </ul>
</div>
      <? } ?>
	</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>