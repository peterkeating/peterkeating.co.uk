<?php get_header(); ?>
		
		<?php while ( have_posts() ) : the_post() ?>
		<article>
			<h1><?php the_title(); ?></h1>
			
			<div class="published-on"><?php the_time('F j, Y') ?></div>
			
			<?php the_excerpt(); ?>
			
			<a href="<?php the_permalink(); ?>">Continue reading</a>
		</article>
		<?php endwhile; ?>

<?php get_footer(); ?>