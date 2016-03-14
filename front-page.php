<?php get_header(); ?>
<div class="row">
	<div class="col-md-3">
		<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
	<div class="col-md-9">
		<?php dynamic_sidebar('primary'); ?>
	</div>
</div>
<?php get_footer(); ?>