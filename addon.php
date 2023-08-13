<?php 
/*
* Plugin Name: Default Posts Slider Addon
* Author: Vaibhav Gangrade
* Description: Default Post widget slider widget.
* Version:1.0
* Author URI:
* Author URL:
*/
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if(!function_exists('dpsa_register_deafult_post_widget_slider')){
	function dpsa_register_deafult_post_widget_slider($widgets_manager){
		require_once( __DIR__ . '/default-post-slider-widget-addon.php' );
		$widgets_manager->register( new \Elementor_post_Slider_addonWidget() );
	}
}
add_action( 'elementor/widgets/register', 'dpsa_register_deafult_post_widget_slider' );



