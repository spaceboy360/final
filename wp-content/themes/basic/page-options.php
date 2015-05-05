<?php get_header();
/*
Template Name: Pricing Options
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<div class="container white">
		<div class="row pricingoptionsdown">
			<div class="col-xs-12 col-lg-12">
				
					<h2>Special Options</h2>

					<div class="col-xs-4">
						<img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/basic.png" alt="button logo" >
					</div>

					<div class="col-xs-4">
							<img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/medium.png" alt="button logo" >
					</div>

					<div class="col-xs-4">
							<img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/premium.png" alt="button logo" >
					</div>
					<!-- End images -->

					<div class="col-xs-4">
						<h3>Essential Subscription</h3>
						<p>Gain access up to 40 images a month for only $220!</p>
						<a class="btn" href="<?php bloginfo('url'); ?>/shopping-cart"><img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/cart.png" alt="button logo" ></a>
					</div>

					<div class="col-xs-4">
						<h3>Intermediate Subscription</h3>
						<p>Gain access up to 80 images a month for only $420!</p>
							<a class="btn" href="<?php bloginfo('url'); ?>/shopping-cart"><img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/cart.png" alt="button logo" ></a>
					</div>

					<div class="col-xs-4">
						<h3>Premium Subscription</h3>
						<p>Gain access up to 120 images a month for only $620!</p>
							<a class="btn" href="<?php bloginfo('url'); ?>/shopping-cart"><img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/cart.png" alt="button logo" ></a>
					</div>

				</div>
			</div>
		
	</div>




  	<!-- <h1><?php the_title(); ?></h1> -->
 	<?php the_content(); ?>





  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>