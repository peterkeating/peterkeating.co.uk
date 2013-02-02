<?php get_header(); ?>


<?php while ( have_posts () ) : the_post() ?>

	<div class="post-summary">
		<div class="wide-post">
			<div class="post-publish-date date-icon"><?php the_time('F j, Y') ?></div>
			<div class="post-tags small-medium-text tag-icon"><?php the_tags('',', ',''); ?></div>
			<a href="<?php the_permalink(); ?>" class="post-link">Continue Reading</a>
		</div>

		<div class="post-keyinfo">
			<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="narrow-post">
				<div class="post-publish-date date-icon"><?php the_time('F j, Y') ?></div>
				<div class="post-tags tag-icon"><?php the_tags('',', ',''); ?></div>
			</div>

			<div class="post-snippet"><?php the_excerpt(); ?></div>

			<a href="<?php the_permalink(); ?>" class="post-link">Continue Reading</a>
		</div>
	</div>

<?php endwhile; ?>

<a href="/index.php/archive">Check out the Archive to view all the posts.</a>

<?php get_footer(); ?>
