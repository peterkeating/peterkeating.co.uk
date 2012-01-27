<?php get_header(); ?>
		
	<?php while ( have_posts() ) : the_post() ?>
	<article>
		<h1><?php the_title(); ?></h1>
		
		<div class="published-on"><?php the_time('F j, Y') ?></div>
		
		<div class="post">
			<?php the_excerpt(); ?>
		</div>
		
		<a href="<?php the_permalink(); ?>">Continue reading</a>
	</article>
	<?php endwhile; ?>
		
	<nav class="top">
		<?php previous_posts_link('Newer Posts') ?>
		<?php next_posts_link('Older Posts'); ?>
	</nav>

	<nav class="bottom">
		<?php previous_posts_link('Newer Posts') ?>
		<?php next_posts_link('Older Posts'); ?>
	</nav>	

<?php get_footer(); ?>