<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuariosAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		if($this->session->userdata('login') == true){
			try{
				$crud = new grocery_CRUD();
				$crud->set_theme('bootstrap-v4');
				$crud->set_table('usuarios');
				// Cambia el nombre de la table (Alias)
				$crud->set_subject('Usuarios');
				$crud->columns('noUsuario', 'nombreUsuario', 'apellidoUsuario', 'permisos');
				$crud->required_fields('noUsuario', 'nombreUsuario', 'apellidoUsuario', 'constrasenaUsuario', 'permisos');
	
				// Se utiliza para quitar acciones del action
				$crud->unset_delete();
				// Renderizamos el componente en pantalla
				$output = $crud->render();
				$this->load->view('Admin/usuariosAdmin.php', (array)$output);
			 }catch(Exception $e){
				 show_error($e->getMessage());
			 }
		}else{
			redirect('Cuenta');
		}
	}
}
