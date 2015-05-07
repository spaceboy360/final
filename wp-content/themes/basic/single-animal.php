<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php 

$args = array(
  'taxonomy' => 'sizes',
  ); 

  $categories = get_categories( $args );

  

  foreach ($categories as $category){
   echo $category->cat_name;
  }

?>
      

   <div class="container down1 white">

  
       		<h1 class="white"><?php the_title(); ?></h1>

      <div class="col-lg-4"></div>     

       <div class="col-xs-12 col-md-4 col-lg-4 white">
	       	<img class="img-responsive" src="<?php the_field("animallargephoto");?>" alt="">
	      	<p class="white"><?php the_field("animaltext");?></p>
          

          <div class="col-lg-4"></div> 

         

	      	 <a href="<?php bloginfo('url');?>/home/" class="btn btn-primary btn-sm margin2">Go Back</a>

 <!-- select options -->

            <select name="carlist" class="btn btn-primary btn-lg" form="carform">
                  <option value="1">Small</option>
                  <option value="2">Medium</option>
                  <option value="3">Large</option>
            </select>

 <!-- end select options -->


	      	  <a href="<?php bloginfo('url'); ?>/shopping-cart" class="btn btn-primary btn-sm margin2">$25</a>
             
         
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