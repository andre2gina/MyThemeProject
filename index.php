<?php get_header(); 
if ( have_posts() ) :
	while ( have_posts() ) : 
		the_post(); ?>
		<?php the_category(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php the_date();	?>
		<?php
		echo '<hr>';
	// End the loop.
	endwhile;
// If no content, include the "No posts found" template.
else :
	echo 'nu avem posturi';
endif;
?>
<?php get_footer(); ?>

