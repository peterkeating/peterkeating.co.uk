<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<?php the_post(); ?>

<article class="clearfix">
	<div class="post-details">
		<h1 class="post-title"><?php the_title(); ?></h1>

		<div class="post">
			<?php the_content(); ?>
		</div>    
	</div>
</div>

<?php get_footer(); ?>