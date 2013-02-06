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
	<h1>Archive</h1>

 	<?php while ( have_posts() ) : the_post(); ?>
 	<?php
 		if ($active != substr($post->post_date, 0, 7)) {
 			$active = substr($post->post_date, 0, 7);
 		?>
 			<h2 class="archive-month-year"><?php the_time('F Y') ?></h2>
 		<?php } ?>

 		<div class="archive-post">
 			<div class="archive-post-date">
 				<small class="archive-post-date-day">
 					<?php the_time('j') ?>
 				</small>
 			</div>

 			<div class="archive-post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
 		</div>
 	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
