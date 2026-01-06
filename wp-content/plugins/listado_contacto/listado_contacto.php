<?php
/*
*	Plugin Name: Listado de Contacto
*	Description: Listado de Contacto
*	Version: 2.0
*/
require_once "models/m_model.php";

class Listado_contacto extends Modelnewletter
{
	private $_error = array();
	public function __construct()
	{
		parent::__construct();
	}

	public function listar_registros()
	{
			global $wpdb;

			$fi = "";
			$ff = "";
			if(isset($_GET["fi"]) && !empty($_GET["fi"]) && isset($_GET["ff"]) && !empty($_GET["ff"]))
			{
				$fi = $_GET["fi"];
				$ff = $_GET["ff"];
			}

			$centrostotal = count($this -> get_registros_c($fi,$ff));
			
			$paginate = 0;
			if(isset($_GET["pagina"]) && !empty($_GET["pagina"]))
			{
				$paginate = (intval($_GET["pagina"])-1) * 50;
			}
			
			$centros = $this -> get_registros($fi,$ff, $paginate);
			if(isset($_GET["excel"]) && $_GET["excel"] == "true")
			{
				$centros = $this -> get_registros_excel($fi,$ff);
			}
			
			$_this = $this;
			include('views/v_form_menu.php');
	}
}

function listado_contacto_install()
{
	global $wpdb;
}

function listado_contacto_uninstall()
{

}

function listado_contacto_show_form()
{
	$_adm_menu = new listado_contacto();
	$_adm_menu -> listar_registros();
}

function listado_contacto_add_menu()
{
	if (function_exists('add_options_page'))
	{
		add_menu_page('listado_contacto', 'List. Contacto', 'editor', 'listado_contacto', 'listado_contacto_show_form', WP_PLUGIN_URL . '/listado_contacto/icon.png');
		add_menu_page('listado_contacto_admin', 'List. Contacto', 'administrator', 'listado_contacto2', 'listado_contacto_show_form', WP_PLUGIN_URL . '/listado_contacto/icon.png');
	}
}

if (function_exists('add_action'))
{
	add_action('admin_menu', 'listado_contacto_add_menu');
}

add_action('activate_listado_contacto/listado_contacto.php','listado_contacto_install');
add_action('deactivate_listado_contacto/listado_contacto.php', 'listado_contacto_uninstall');