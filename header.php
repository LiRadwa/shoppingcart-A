<?php
/**
* Theme for display productsion
*/
?><!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title("|", true, 'right'); ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>

body {
    

    background-image: url("bg.jpg");
     background-size: 1350px 2200px;
    background-repeat: no-repeat;
}
}
</style>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
      
  }
  </style>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="container">
			<header class="site-header page-header">
				
		<nav class="navbar navbar-inverse">
		  
		    <div class="navbar-header">
		      <a class="navbar-brand" href="<?php echo home_url() ?>">
		     	 <?php bloginfo( 'name' ); ?>
		      </a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="<?php echo home_url() ?>">Home</a></li>
		      <li><a href="#">About Us</a></li>
		      <li><a href="#">Contact</a></li> 
		    </ul>
		</nav>
			</header>

