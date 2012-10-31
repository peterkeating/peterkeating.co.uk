<?php get_header(); ?>

<h1>Tag Archive - <?php single_tag_title() ?></h1>

<?php while ( have_posts () ) : the_post() ?>

	<div class="post-summary clearfix">
		<div class="wide-post clearfix">
			<div class="publish-date date-icon"><?php the_time('F j, Y') ?></div>
			<div class="tags small-medium-text tag-icon"><?php the_tags('',', ',''); ?></div>
			<a href="<?php the_permalink(); ?>" class="post-link">Continue Reading</a>
		</div>

		<div class="post-keyinfo">
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="narrow-post clearfix">
				<div class="publish-date small-medium-text date-icon"><?php the_time('F j, Y') ?></div>
				<div class="tags small-medium-text tag-icon"><?php the_tags('',', ',''); ?></div>
			</div>

			<div class="snippet"><?php the_excerpt(); ?></div>

			<a href="<?php the_permalink(); ?>" class="post-link">Continue Reading</a>
		</div>
	</div>

<?php endwhile; ?>

<a href="/index.php/archive">Check out the Archive to view all the posts.</a>

<?php get_footer(); ?>
