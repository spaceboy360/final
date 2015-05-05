<?php get_header();
/*
Template Name: Home Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<div class="container">
		
			<div class="col-xs-12 col-lg-12 moveadcontainerdown">
				<h1 class="centertext1">
					OVER 55 MILLION<br/>
					<span class="ad1">High Quality Images</span>
				</h1>
			</div>
		
			<div class="container">
				<div class="col-xs-12 col-lg-4"></div>

				<div class="col-xs-12 col-lg-4">

					
						
					<a class="btn" href="<?php bloginfo('url'); ?>/latest-images"><img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/freetrialbtn.jpg" alt="button logo" ></a>

				</div>

				<div class="col-xs-12 col-md-4 col-lg-4"></div>
			</div>

	<div class="row movedowndivider1 fullwidth">
			<div class="col-xs-1 col-lg-3">
				<img class="img-responsive centerthis imagedividerup" src="<?php bloginfo('template_directory'); ?>/images/divider1.png" alt="button logo" >
			</div>

			<div class="col-xs-11 col-lg-9 divider1text">
				<h2>BROWSE BY CATEGORIES</h2>
			</div>
	</div>


	<!-- IMAGES HERE -->


<div class="container movedownimagecategories centertext3">
	<div class="col-xs-12 col-lg-6 col-lg-push-2">
			
		<a class="grid_box" href="<?php bloginfo('url'); ?>/animals">
			<div class="content">
				<h3>ANIMALS</h3>
				<!-- <p>some other text here</p> -->
			</div>
			<div class="bg">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/cat.jpg" alt="button logo" >
			</div>
		</a>

	</div>


	<div class="col-xs-12 col-lg-6">
			
		<a class="grid_box" href="<?php bloginfo('url'); ?>/food">
			<div class="content">
				<h3>FOOD</h3>
				<!-- <p>some other text here</p> -->
			</div>
			<div class="bg">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/food.jpg" alt="button logo" >
			</div>
		</a>

	</div>

	<div class="col-xs-12 col-lg-6 col-lg-push-2">
			
		<a class="grid_box" href="<?php bloginfo('url'); ?>/travel">
			<div class="content">
				<h3>TRAVEL</h3>
				<!-- <p>some other text here</p> -->
			</div>
			<div class="bg">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/nature.jpg" alt="button logo" >
			</div>
		</a>

	</div>

	<div class="col-xs-12 col-lg-6">
			
		<a class="grid_box" href="<?php bloginfo('url'); ?>/people">
			<div class="content">
				<h3>PEOPLE</h3>
				<!-- <p>some other text here</p> -->
			</div>
			<div class="bg">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/japanesepeople.jpg" alt="button logo" >
			</div>
		</a>

	</div>
</div>

	<!-- END OF HOVER IMAGES -->


<!-- START OF BLOG PREVIEW -->

<div class="container white">

	<div class="col-xs-12 col-lg-6">
		<!-- <div class="well"> -->
					<?php
					// Query Photos
					$args = array(
					'post_type'=>'format'
					);
					$format = new WP_Query( $args );

			if($format->have_posts()) : while ($format->have_posts()) : $format->the_post(); ?>
			
		<h3><?php the_title(); ?></h3>
		<p><?php the_field("formattext");?></p>

				<?php endwhile; else: ?>
	   				 <p>Sorry, no pages matched your criteria.</p>
				<?php endif; ?>

			<a class="btn" href="<?php bloginfo('url'); ?>/blog"><img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/view.png" alt="button logo" ></a>

		<!-- </div> -->
	</div>

	<div class="col-xs-12 col-lg-6">
		<!-- <div class="well"> -->
			<?php
					// Query Photos
					$args = array(
					'post_type'=>'tip'
					);
					$tip = new WP_Query( $args );

			if($tip->have_posts()) : while ($tip->have_posts()) : $tip->the_post(); ?>
			
		<h3><?php the_title(); ?></h3>
		<p><?php the_field("tipstext");?></p>

				<?php endwhile; else: ?>
	   				 <p>Sorry, no pages matched your criteria.</p>
				<?php endif; ?>


			
			<a class="btn" href="<?php bloginfo('url'); ?>/help"><img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/visit.png" alt="button logo" ></a>

		<!-- </div> -->
	</div>

	<div class="col-xs-12 col-lg-6">
		<!-- <div class="well"> -->

			<?php
					// Query Photos
					$args = array(
					'post_type'=>'size'
					);
					$size = new WP_Query( $args );

			if($size->have_posts()) : while ($size->have_posts()) : $size->the_post(); ?>
			
		<h3><?php the_title(); ?></h3>
		<p><?php the_field("sizetexts");?></p>

				<?php endwhile; else: ?>
	   				 <p>Sorry, no pages matched your criteria.</p>
				<?php endif; ?>

			<a class="btn" href="<?php bloginfo('url'); ?>/guidelines"><img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/see.png" alt="button logo" ></a>

			
		<!-- </div> -->
	</div>

	<div class="col-xs-12 col-lg-6">
		<!-- <div class="well"> -->
			<?php
					// Query Photos
					$args = array(
					'post_type'=>'exclusivity'
					);
					$exclusivity = new WP_Query( $args );

			if($exclusivity->have_posts()) : while ($exclusivity->have_posts()) : $exclusivity->the_post(); ?>
			
		<h3><?php the_title(); ?></h3>
		<p><?php the_field("exclusivitytext");?></p>

				<?php endwhile; else: ?>
	   				 <p>Sorry, no pages matched your criteria.</p>
				<?php endif; ?>

			<a class="btn" href="<?php bloginfo('url'); ?>/learn-more"><img class="img-responsive centerthis" src="<?php bloginfo('template_directory'); ?>/images/learn.png" alt="button logo" ></a>



		<!-- </div> -->
	</div>

<!-- END OF BLOG PREVIEW -->
</div>



	</div>

	




 	<?php the_content(); ?>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>