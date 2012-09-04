<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<?php
// gets every post.
query_posts('posts_per_page=-1');

$active = '';

?>

<div class="archive">
	<h1 class="title">Archive</h1>

 	<?php while ( have_posts() ) : the_post(); ?>
 	<?php 
 		if ($active != substr($post->post_date, 0, 7)) { 
 			$active = substr($post->post_date, 0, 7);
 		?>
 			<div class="month-year"><?php the_time('F Y') ?></div>
 		<?php } ?>

 		<div class="post clearfix">
 			<div class="day">
 				<?php the_time('j') ?>
 			</div> 

 			<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
 		</div>
 	<?php endwhile; ?>
</div>

<?php get_footer(); ?>