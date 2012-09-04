<?php get_header(); ?>


<?php while ( have_posts () ) : the_post() ?>

	<div class="post-summary">
		<div class="title"><?php the_title(); ?></div>
		<div class="publish-date small-medium-text"><?php the_time('F j, Y') ?></div>
		<div class="snippet"><?php the_excerpt(); ?></div>

		<a href="<?php the_permalink(); ?>" class="post-link">Read More</a>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>