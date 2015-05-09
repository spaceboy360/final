<?php get_header();
/*
Template Name: Shopping Cart
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<div class="container white">
		<div class="row pricingoptionsdown">
			<h2><?php the_title(); ?></h2>
			<div class="col-xs-12 col-lg-9 black">
				<div class="well">
					<h2>THANK YOU FOR CHOOSING:</h2>
					<h3>Lady Bug - Small</h3>
					<a class="btn" href="<?php bloginfo('url'); ?>/home"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/completeorder.png" alt="button logo" ></a>
				</div>				
			</div>

			<div class="col-xs-12 col-lg-3">
				<div class="well">
					<img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/bug.jpg" alt="button logo" >
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