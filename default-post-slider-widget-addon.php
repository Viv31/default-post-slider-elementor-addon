<?php
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 if(!class_exists('dpsa_Elementor_post_Slider_addonWidget')){
	class dpsa_Elementor_post_Slider_addonWidget extends \Elementor\Widget_Base{
		
		public function get_name() {
			return 'posts_slider_widget';
		}
		public function get_title() {
			return esc_html__( 'Posts Slider Widget', 'elementor-addon' );
		}
		public function get_icon() {
			return 'eicon-post-slider';
		}

		public function get_categories() {
		return [ 'basic' ];
	}
		protected function render() {
		$posts_data = get_posts();
		//print_r($posts_data);

		foreach($posts_data as $post){
			//print_r($post);
			$postID =  $post->ID;
			//echo '<h6>'.$post->post_title.'</h6><br>';
			//echo '<p>'.$post->post_content.'<p><br>';
			//echo get_the_post_thumbnail($postID); 
			?>
			<div class="w3-content w3-display-container">

				<div class="w3-display-container mySlides">
				  <?php echo esc_html(get_the_post_thumbnail($postID,'medium'));?>
				  	
				  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
				    <?php echo esc_html($post->post_title); ?>
				  </div>
				</div>

			
			</div>
			<?php }//foreach close ?>
		<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
			<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

		<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		     x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}
		</script>
		<?php 
	}//function close
}

}

