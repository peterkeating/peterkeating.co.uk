<?php get_header(); ?>
		
		<article>
		<?php while ( have_posts() ) : the_post() ?>
			<h1><?php the_title(); ?></h1>
			
			<p><?php the_content(); ?></p>
		<?php endwhile; ?>
		</article>

<?php get_footer(); ?>