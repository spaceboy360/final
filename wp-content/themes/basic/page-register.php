<?php get_header();
/*
Template Name: Register Page
*/
?>
<div class="container white">





<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<h1><?php the_title(); ?></h1>
 	<?php the_content(); ?>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


</div>

<?php get_footer(); ?>

