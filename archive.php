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
 			<h2 class="month-year"><?php the_time('F Y') ?></h2>
 		<?php } ?>

 		<div class="post">
 			<div class="day">
 				<small class="element">
 					<?php the_time('j') ?>
 				</small>
 			</div>

 			<div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
 		</div>
 	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
