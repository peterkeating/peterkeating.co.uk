<?php get_header(); ?>


<?php while ( have_posts () ) : the_post() ?>

	<div class="post-summary">
		<h3 class="title"><?php the_title(); ?></h3>
		<div class="publish-date small-medium-text"><?php the_time('F j, Y') ?></div>
		<div class="snippet"><?php the_excerpt(); ?></div>

		<a href="<?php the_permalink(); ?>" class="post-link">Continue Reading</a>
	</div>

<?php endwhile; ?>

<a href="/index.php/archive">Check out the Archive to view all the posts.</a>

<?php get_footer(); ?>