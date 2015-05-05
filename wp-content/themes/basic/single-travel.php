<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  
      

   <div class="container down1 white">

  
       		<h1 class="white"><?php the_title(); ?></h1>

            <div class="col-lg-4"></div>

     

       <div class="col-xs-12 col-md-4 col-lg-4 white">
	       	<img class="img-responsive" src="<?php the_field("travelbigphoto");?>" alt="">
	      	<p class="white"><?php the_field("traveltext");?></p>

          <div class="col-lg-4"></div> 

	      	 <a href="<?php bloginfo('url');?>/home/" class="btn btn-primary btn-sm margin2">Go Back</a>
	      	  <a href="<?php bloginfo('url');?>/home/" class="btn btn-primary btn-sm margin2">Add to Cart</a>
      </div>

      <div class="col-xs-12">
      	 <div id="disqus_thread">
              <?php disqus_embed('chilysstockphoto'); ?>
          </div>
      </div>



    </div>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>