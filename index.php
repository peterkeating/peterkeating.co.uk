<?php get_header(); ?>
		
		<article>
		<?php while ( have_posts() ) : the_post() ?>
			<h1><?php the_title(); ?></h1>
		<?php endwhile; ?>
		</article>

<?php get_footer(); ?>