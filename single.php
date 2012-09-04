<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post() ?>
	<article class="clearfix">
		<div class="post-details">
			<h1 class="post-title very-large-text"><?php the_title(); ?></h1>
		
			<div class="published-on tags small-medium-text"><span class="date"><?php the_time('F j, Y') ?></span> in <?php the_tags('',', ',''); ?></div>
		</div>
		
		<div class="post">
			<?php the_content(); ?>
		</div>
	</article>
	
	<?php endwhile ?>

	<nav class="bottom">
		<?php previous_post_link( '%link', __( 'Previous', 'peterkeating.co.uk' ) ); ?>
		<?php next_post_link( '%link', __( 'Next', 'peterkeating.co.uk' ) ); ?>
	</nav>	
	
	
<?php get_footer(); ?>