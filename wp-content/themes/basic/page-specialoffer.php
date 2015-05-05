<?php get_header();
/*
Template Name: Special Offers Options
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<div class="container white">
		<div class="row pricingoptionsdown">
			<div class="col-xs-12 col-lg-12">
					<img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/specialoffer.jpg" alt="button logo" >
				</div>
			</div>
		
	</div>













  	<!-- <h1><?php the_title(); ?></h1> -->
 	<?php the_content(); ?>





  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>