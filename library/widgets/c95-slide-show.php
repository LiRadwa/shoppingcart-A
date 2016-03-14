<?php
class SlideshowWidget extends WP_Widget {

    function __construct() {
        // Instantiate the parent object
        parent::__construct( false, 'Slideshow Widget' );
    }

    function widget( $args, $instance ) { ?>
       
  
    <?php }

    function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }

    function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Slideshow', 'shopping' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php 
    }
}

function register_Slideshow_widget() {
    register_widget( 'SlideshowWidget' );
}

add_action( 'widgets_init', 'register_Slideshow_widget' );