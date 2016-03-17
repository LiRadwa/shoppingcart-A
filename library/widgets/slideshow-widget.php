<?php
class SlideshowWidget extends WP_Widget {

    function __construct() {
        // Instantiate the parent object
        parent::__construct( false, 'Slideshow Widget' );
    }

    function widget( $args, $instance ) { ?>
       
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="a.jpg" alt="a" style="width:1200px;height:500px;">
      
    </div>
    <div class="item">
      <img src="b.jpg" alt="b" style="width:1200px;height:500px;">
      
    </div>
    <div class="item">
      <img src="c.png" alt="c" style="width:1200px;height:500px;">
      
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<br>
<br>
    <?php }

    function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }

    function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Slideshow', 'hospitals' );
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