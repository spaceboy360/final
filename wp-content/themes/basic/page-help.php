<?php get_header();
/*
Template Name: Help
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">
  	<h1 class="white"><?php the_title(); ?></h1>
		<div class="well">
			<?php the_content(); ?>

 		</div>
</div>
  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>