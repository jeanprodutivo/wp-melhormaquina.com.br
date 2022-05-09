<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.livemedia.marketing/
 * @since      1.0.0
 *
 * @package    Backexit_Redirect
 * @subpackage Backexit_Redirect/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Backexit PLUS LiveMedia
 * @subpackage Backexit_Redirect/admin
 * @author     Live Media. <gerencia@nucleoexpert.com>
 */
class Backexit_Redirect_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/backexit-redirect-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/backexit-redirect-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function ber_metabox() {

		$prefix = '_ber_';
	
		$cmb = new_cmb2_box( array(
			'id'           => $prefix . 'ber_settings',
			'title'        => __( 'Configurações de redirecionamento', 'ber' ),
			'object_types' => array( 'page', 'post' ),
			'context'      => 'side',
			'priority'     => 'default',
		) );
	
		$cmb->add_field( array(
			'name' => __( 'Ativar redirecionamento neste item', 'ber' ),
			'id' => $prefix . 'active',
			'type' => 'radio_inline',
			'default' => 'false',
			'options' => array(
				'true' => __( 'Sim', 'ber' ),
				'false' => __( 'Não', 'ber' ),
			),
		) );
	
		$cmb->add_field( array(
			'name' => __( 'Disparar o redirecionamento quando:', 'ber' ),
			'id' => $prefix . 'when',
			'type' => 'multicheck',
			'desc' => __( 'Selecione ao menos uma opção caso o redirecionamento esteja ativado.', 'ber' ),
			'default' => 'back',
			'select_all_button' => false,
			'options' => array(
				'back' => __( 'O botão voltar for clicado', 'ber' ),
				'exit_intent' => __( 'Quando for detectada uma exit intent', 'ber' ),
			)
		) );
	
		$cmb->add_field( array(
			'name' => __( 'Tipo de redirecionamento', 'ber' ),
			'id' => $prefix . 'way',
			'type' => 'select',
			'default' => 'default',
			'options' => array(
				'default' => __( 'URL padrão', 'ber' ),
				'custom' => __( 'Endereço customizado', 'ber' ),
			),			
		) );
	
		$cmb->add_field( array(
			'name' => __( 'URL para redirecionamento customizado', 'ber' ),
			'id' => $prefix . 'to',
			'type' => 'text_url',
			'desc' => 'Formato da URL: https://endereco.com.br',
			'attributes' => array(
				'style' => 'width:100%;',
			),			
		) );
	
	}	

	public function create_admin_page()
	{
		$page_title = 'Redirecionador Back/Exit Plus';
		$menu_title = 'Redirecionador Back/Exit Plus';
		$capability = 'manage_options';
		$menu_slug = 'ber';
		$function = array($this, 'ber_admin_display');
		$icon_url = 'dashicons-randomize';
		add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url);
	}

	public function ber_admin_display()
	{
		if (!current_user_can('manage_options')) {
			wp_die('Unauthorized user');
		}

		if (isset($_POST['ber_default_url'])) {
			$value = $_POST['ber_default_url'];
			update_option('ber_default_url', $value);
		}
		$ber_default_url = get_option('ber_default_url', '');
		
		if (isset($_POST['ber_home_redirect_status'])) {
			$value = $_POST['ber_home_redirect_status'];
			update_option('ber_home_redirect_status', $value);
		}
		$ber_home_redirect_status = get_option('ber_home_redirect_status', 'false');

		if (isset($_POST['ber_home_redirect_event'])) {
			$value = $_POST['ber_home_redirect_event'];
			update_option('ber_home_redirect_event', $value);
		}
		$ber_home_redirect_event = get_option('ber_home_redirect_event', array());

		// dd($ber_home_redirect_event);

		if (isset($_POST['ber_home_redirect_type'])) {
			$value = $_POST['ber_home_redirect_type'];
			update_option('ber_home_redirect_type', $value);
		}
		$ber_home_redirect_type = get_option('ber_home_redirect_type', 'default');

		if (isset($_POST['ber_home_redirect_url'])) {
			$value = $_POST['ber_home_redirect_url'];
			update_option('ber_home_redirect_url', $value);
		}
		$ber_home_redirect_url = get_option('ber_home_redirect_url', '');

		include 'page_form.php';
	}	

}
