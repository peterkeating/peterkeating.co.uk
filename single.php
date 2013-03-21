<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post() ?>
	<div class="single-post">
		<h1 class="post-title"><?php the_title(); ?></h1>

		<div class="single-post-meta">
			<div class="post-publish-date date-icon">
				<?php the_time('F j, Y') ?>
			</div>

			<div class="post-tags tag-icon"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
		</div>

		<div class="post-content">
			<?php the_content(); ?>
		</div>
	</div>

	<?php endwhile ?>

	<nav class="post-navigation">
		<div class="previous-post">
			<?php previous_post_link( '%link', __( 'Previous', 'peterkeating.co.uk' ) ); ?>
		</div>

		<div class="next-post">
			<?php next_post_link( '%link', __( 'Next', 'peterkeating.co.uk' ) ); ?>
		</div>
	</nav>


<?php get_footer(); ?>
