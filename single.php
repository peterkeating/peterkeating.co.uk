<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post() ?>
	<article>
		<h1><?php the_title(); ?></h1>
		
		<div class="published-on">Posted on <?php the_time('F j, Y') ?> at <?php the_time('g:i a') ?>.</div>
		
		<?php the_content(); ?>
	</article>
	
	<?php endwhile ?>

	<nav class="top">
		<?php previous_post_link( '%link', __( 'Previous', 'peterkeating.co.uk' ) ); ?>
		<?php next_post_link( '%link', __( 'Next', 'peterkeating.co.uk' ) ); ?>
	</nav>

	<nav class="bottom">
		<?php previous_post_link( '%link', __( 'Previous', 'peterkeating.co.uk' ) ); ?>
		<?php next_post_link( '%link', __( 'Next', 'peterkeating.co.uk' ) ); ?>
	</nav>	
	
	
<?php get_footer(); ?>