<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post() ?>
	<article>
		<h1><?php the_title(); ?></h1>
		
		<div class="published-on">Posted at <?php the_time('g:i a') ?> on <?php the_time('F j, Y') ?></div>
		
		<?php the_content(); ?>
	</article>
	
	<?php endwhile ?>

	<nav>
		<div class="nav-previous"><?php previous_post_link( '%link', __( 'Previous', 'peterkeating.co.uk' ) ); ?></div>
		<div class="nav-next"><?php next_post_link( '%link', __( 'Next', 'peterkeating.co.uk' ) ); ?></div>
	</nav>
	
<?php get_footer(); ?>