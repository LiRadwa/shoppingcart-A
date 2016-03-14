<?php
class AllCategoriesWidget extends WP_Widget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'All Categories Widget' );
	}

	function widget( $args, $instance ) { ?>
		<div class="panel panel-default">
			<div class="panel-heading">
		  		<div class="panel-title"><?= $instance['title'] ?></div>
			</div>
		  <div class="panel-body">
		    <?php
		    	$args = array(
		    				'post_type' => 'post',
		    				'posts_per_page' => 3,
		    				'order' => 'DESC',
		    				'order_by' => 'ID'
		    			);
		    	$news = new WP_Query($args);
		    	if($news->have_posts()):
		    		echo "<ul>";
		    		while($news->have_posts()):
		    			$news->the_post();?>
		    				<li>
		    					<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
		    				</li>
		    			<?php
		    		endwhile;
		    		echo "</ul>";
		    	else:
		    		__('No News', 'hospitals');
		    	endif;
		    ?>
		  </div>
		</div>
	<?php }

	function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

	function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'All Categories', 'shopping' );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}
}

function register_widgets() {
	register_widget( 'AllCategoriesWidget' );
}

add_action( 'widgets_init', 'register_widgets' );