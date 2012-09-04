<?php get_header(); ?>


<?php while ( have_posts () ) : the_post() ?>

	<div class="post-summary">
		<div class="title"><?php the_title(); ?></div>
		<div class="publish-date small-medium-text"><?php the_time('F j, Y') ?></div>
		<div class="snippet"><?php the_excerpt(); ?></div>

		<a href="<?php the_permalink(); ?>" class="post-link">Read More</a>
	</div>

<?php endwhile; ?>


<!--
		
	<?php while ( have_posts() ) : the_post() ?>
	<article class="clearfix">
		<div class="post-details">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<div class="published-on"><?php the_time('F j, Y') ?></div>
			<div class="tags"><?php the_tags('',', ',''); ?></div>
		</div>
		
		<div class="post">
			<?php the_content(); ?>
		</div>
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
-->

<?php get_footer(); ?>