<?php get_header(); ?>
<div class="row">
<div class="col-md-12">
		<?php dynamic_sidebar('slideshow'); ?>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
	<div class="col-md-8">
		<?php dynamic_sidebar('primary'); ?>
	</div>
</div>
<?php get_footer(); ?>