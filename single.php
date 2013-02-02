<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post() ?>
	<div class="single-post">
		<div class="post-details">
			<h1 class="post-title"><?php the_title(); ?></h1>

			<div class="post-meta">
				<div class="publish-date date-icon">
					<?php the_time('F j, Y') ?>
				</div>

				<div class="tags tag-icon">
					<?php the_tags('',', ',''); ?>
				</div>
			</div>
		</div>

		<div class="post">
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
