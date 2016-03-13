<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title("|",true,'right'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header class="site-header">
		<h1>
			<a href="<?php echo home_url() ?>">
				<?php bloginfo('name');?>
		</h1>
	</header>
