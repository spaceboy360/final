<?php get_header();
/*
Template Name: Food Page
*/
?>



<?php
					// Query Photos
					$args = array(
					'post_type'=>'food'
					);
					$food = new WP_Query( $args );

			if($food->have_posts()) : while ($food->have_posts()) : $food->the_post(); ?>


			


			

				<div class="com-xs-12 col-lg-3">

					<a class="grid_box down1" href="<?php the_permalink();?>">
			<div class="content">
				<h2><?php the_field("foodhovertext");?></h2>
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/hoverbtn.png" alt="button logo" >
				<!-- <p>some other text here</p> -->
			</div>
			<div class="bg">
				<img class="img-responsive" src="<?php the_field("foodphoto");?>">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/hoverbtn.png" alt="button logo" >
			</div>
		</a>

					
					  	

				</div>

					<?php endwhile; else: ?>
	   				 	<p>Sorry, no pages matched your criteria.</p>

			<?php endif; ?>
				
			
		

			








<?php get_footer(); ?>

