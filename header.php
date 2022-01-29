<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if (function_exists('wp_body_open')): ?>
		<?php wp_body_open(); ?>
	<?php endif ?>
<div id="page"  class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
	 			 <a class="navbar-brand" href="#"> <?php 

	 			 if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	 			  ?></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    					<span class="navbar-toggler-icon"></span>
	  				   </button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  	 <?php get_template_part('/template-parts/site-nav'); ?>
	  	</div>
	</nav>
	</div>
	</header>