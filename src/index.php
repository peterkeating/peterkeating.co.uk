<?php get_header(); ?>
		
	<?php while ( have_posts() ) : the_post() ?>
	<article class="clearfix">
		<div class="post-details">
			<h1><?php the_title(); ?></h1>
			<div class="published-on"><?php the_time('F j, Y') ?></div>
		</div>
		
		<div class="post">
			<?php the_content(); ?>
		</div>

		<div class="clear"></div>
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