<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body>
  <div class="container fullwidth">
<style>
	
body {  
background-repeat: repeat-x repeat-y;  
background:url(<?php bloginfo('template_directory'); ?>/images/background.jpg);
background-color: black;
}




</style>
  	
  	
  		<div class="col-xs-12">
  			<img class="img-responsive centertopbanner" src="<?php bloginfo('template_directory'); ?>/images/banner.jpg" alt="Banner"></a>
  		</div>
  	

	
		<div class="col-sm-6 col-lg-3">
			<a href="<?php bloginfo('url'); ?>/home"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/navigationbanner.png" alt="button logo"></a>
		</div>

  		<div class="col-sm-6 col-lg-9">
  			<ul class="nav nav-pills pull-right">				
				<li class="<?php is_active('latest-images'); ?>"><a class="btn" href="<?php bloginfo('url'); ?>/latest-images"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/btnlatestimages.jpg" alt="button logo" ></a></li>
				<li class="<?php is_active('pricing-options'); ?>"><a class="btn" href="<?php bloginfo('url'); ?>/pricing-options"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/btnpricing.jpg" alt="button logo" ></a></li>
				<li class="<?php is_active('special-offers'); ?>"><a class="btn" href="<?php bloginfo('url'); ?>/special-offers"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/btnspecialoffers.jpg" alt="button logo" ></a></li>
				<li class="<?php is_active('shopping-cart'); ?>"><a class="btn" href="<?php bloginfo('url'); ?>/shopping-cart"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/btnshoppingcart.jpg" alt="button logo" ></a></li>
				<li class="<?php is_active('register'); ?>"><a class="btn" href="<?php bloginfo('url'); ?>/register"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/btnlogin.jpg" alt="button logo"  ?></a></li>
				<li class="<?php is_active('help-2'); ?>"><a class="btn" href="<?php bloginfo('url'); ?>/help-2"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/btnhelp.png" alt="button logo"  ?></a></li>
  			</ul>
  		</div>
  	
  	
