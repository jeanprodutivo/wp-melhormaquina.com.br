<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.livemedia.marketing/
 * @since      1.0.0
 *
 * @package    Backexit_Redirect
 * @subpackage Backexit_Redirect/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Backexit PLUS LiveMedia
 * @subpackage Backexit_Redirect/public
 * @author     Live Media. <gerencia@nucleoexpert.com>
 */
class Backexit_Redirect_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Backexit_Redirect_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Backexit_Redirect_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/backexit-redirect-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Backexit_Redirect_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Backexit_Redirect_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if($this->redirect_is_active()) {
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/ber.js', array('jquery'), $this->version, true );
			wp_localize_script($this->plugin_name, 'ber_settings', array(
				'redirectURL' => $this->get_redirect_url(),
				'events' => $this->get_redirect_events()
			));
		}
	}

	public function redirect_is_active() {
		$value = false;

		if(is_singular(['post', 'page'])) {
			$value = get_post_meta( get_the_ID(), '_ber_active', true);
		} elseif (is_home() || is_front_page() ) {
			$value = get_option('ber_home_redirect_status', 'false');
		}

		return $value == 'true' ? true : false;
	}

	public function get_redirect_url() {
		$url = '';

		if(is_singular(['post', 'page'])) { // Check if is a post or page

			$method = get_post_meta( get_the_ID(), '_ber_way', true);

			if ($method == 'custom') {
			   $url = get_post_meta( get_the_ID(), '_ber_to', true);
			} elseif($method == 'default') {
				$url = get_option('ber_default_url', '');
			}
			   
		} elseif (is_home() || is_front_page() ) { // Check if is homepage

			$method = get_option('ber_home_redirect_type', 'default');

			if ($method == 'custom') {
			   $url = get_option('ber_home_redirect_url', '');
			} elseif($method == 'default') {
				$url = get_option('ber_default_url', '');
			}
			   
		}		

		return $url;
	}

	public function get_redirect_events() {
		if(is_singular(['post', 'page'])) {
			$when = get_post_meta( get_the_ID(), '_ber_when', true);
		} elseif (is_home() || is_front_page() ) {
			$when = get_option('ber_home_redirect_event', array());
		}

		if(is_array($when)) {
			$result = [
				'back' => in_array("back", $when),
				'exit_intent' => in_array("exit_intent", $when)
			];			
		} else {
			$result = [
				'back' => false,
				'exit_intent' => false
			];			
		}

		return $result;
	}

}
