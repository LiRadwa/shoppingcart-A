<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title("|",true,'right'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div class="container">
	 <header class="site-header">
		<h1>
			<a href="<?php echo home_url() ?>">
				<?php bloginfo('name');?>
		</h1>
		
		<nav class="site-nav">
			<ul>
				<li><a href="#home" class="active" style="color:black">Home</a></li>
                <li><a href="#news">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li id="p1">Login</li>
			</ul>
		</nav>
	 </header>
