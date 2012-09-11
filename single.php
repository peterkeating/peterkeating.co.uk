<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post() ?>
	<article class="clearfix">
		<div class="post-details">
			<h1 class="post-title"><?php the_title(); ?></h1>
		
			<div class="clearfix">
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
	</article>
	
	<?php endwhile ?>

	<nav class="post-navigation clearfix">
		<div class="previous">
			<?php previous_post_link( '%link', __( 'Previous', 'peterkeating.co.uk' ) ); ?>
		</div>

		<div class="next">
			<?php next_post_link( '%link', __( 'Next', 'peterkeating.co.uk' ) ); ?>
		</div>
	</nav>	
	
	
<?php get_footer(); ?>