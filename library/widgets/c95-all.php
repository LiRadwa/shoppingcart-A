<?php
class LatestProductsWidget extends WP_Widget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Latest Products Widget' );
	}

	function widget( $args, $instance ) { ?>
	<!--	<div class="panel panel-default">
			<div class="panel-heading">
		  		<div class="panel-title"><?= $instance['title'] ?></div>
			</div>
		  <div class="panel-body"> -->
		  <div class="row">
 		<div class="col-md-4">
   			<div class="thumbnail">
    			  <img src="image1xl.jpg" alt="dress">
     		<div class="caption">
      			  <h3>Mini Dress</h3>
       			 <p>Missguided PremiumPearl Trim Bodycon Mini Dress

$137.00</p>
       			 <p><a href="http://localhost/mysqlcartlevel1/" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
      		</div>
   			</div>
   			</div>
   			<div class="col-md-4">
   			<div class="thumbnail">
    			  <img src="mt.jpg" alt="shoes" style="width:250px;height:280px;">
     		<div class="caption">
      			  <h3>Metallic Shoes</h3>
       			 <p>Metallic Silver Shoes for women $80.00</p>
       			 <p><a href="http://localhost/mysqlcartlevel1/" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
      		</div>
   			</div>
   			</div>
   			<div class="col-md-4">
   			<div class="thumbnail">
    			  <img src="tops.jpg" alt="top" style="width:250px;height:280px;">
     		<div class="caption">
      			  <h3>Top</h3>
       			 <p>Pink cotton top for women in summer $150</p>
       			 <p><a href="http://localhost/mysqlcartlevel1/" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
      		</div>
   			</div>
   			</div>
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
		    		__('No News', 'shopping');
		    	endif;
		    ?>
  			
		</div>
		 <div class="row">
 		<div class="col-md-4">
   			<div class="thumbnail">
    			  <img src="re.jpg" alt="shoes" style="width:250px;height:280px;">
     		<div class="caption">
      			  <h3>Sport Shoes</h3>
       			 <p>Reebok White New Woven Furylite Sneaker $141.00</p>
       			 <p><a href="http://localhost/mysqlcartlevel1/" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
      		</div>
   			</div>
   			</div>
   			<div class="col-md-4">
   			<div class="thumbnail">
    			  <img src="sh.jpg" alt="bag" style="width:250px;height:280px;">
     		<div class="caption">
      			  <h3>MBlack Bag</h3>
       			 <p>Woven Oversized Day Bag $220.00</p>
       			 <p><a href="http://localhost/mysqlcartlevel1/" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
      		</div>
   			</div>
   			</div>
   			<div class="col-md-4">
   			<div class="thumbnail">
    			  <img src="da.jpg" alt="top" style="width:250px;height:280px;">
     		<div class="caption">
      			  <h3>Jumper</h3>
       			 <p>Colour Block Textured Jumper for men $100</p>
       			 <p><a href="http://localhost/mysqlcartlevel1/" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
      		</div>
   			</div>
   			</div>
   			</div>
   			<div class="row">
 		<div class="col-md-4">
   			<div class="thumbnail">
    			  <img src="su.jpg" alt="sunglasses" style="width:250px;height:280px;">
     		<div class="caption">
      			  <h3>Sunglasses</h3>
       			 <p>RMirrored Wayfarer Sunglasses $60.00</p>
       			 <p><a href="http://localhost/mysqlcartlevel1/" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
      		</div>
   			</div>
   			</div>
   			<div class="col-md-4">
   			<div class="thumbnail">
    			  <img src="ma.jpg" alt="makeup" style="width:250px;height:280px;">
     		<div class="caption">
      			  <h3>Eyeshadow</h3>
       			 <p>Mega Mattes Eyeshadow Palette $40.00</p>
       			 <p><a href="http://localhost/mysqlcartlevel1/" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
      		</div>
   			</div>
   			</div>
   			<div class="col-md-4">
   			<div class="thumbnail">
    			  <img src="ch.jpg" alt="dressgirl" style="width:250px;height:280px;">
     		<div class="caption">
      			  <h3>Purple Dress</h3>
       			 <p>Kilkari Wine Party Dress for kids $199</p>
       			 <p><a href="http://localhost/mysqlcartlevel1/" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
      		</div>
   			</div>
   			</div>
   			</div>

		    
		<!--  </div>
		</div> -->
	<?php }

	function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

	function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Latest Products', 'shopping' );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}
}

function register_widgets() {
	register_widget( 'LatestProductsWidget' );
}

add_action( 'widgets_init', 'register_widgets' );