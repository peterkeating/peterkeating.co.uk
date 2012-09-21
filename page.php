<?php get_header(); ?>

<?php the_post(); ?>

<div class="single-page clearfix">
	<div class="post-details">
		<h1 class="post-title"><?php the_title(); ?></h1>

		<div class="post page-content">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
