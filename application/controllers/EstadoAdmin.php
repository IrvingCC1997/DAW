<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EstadoAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('estado');
			// Cambia el nombre de la table (Alias)
			$crud->set_subject('Estado');
			$crud->columns('nombreEstado');
			$crud->required_fields('nombreEstado');
			
			$output = $crud->render();
			$this->load->view('Admin/estadoAdmin.php', (array)$output); // Es un casteo
		 }catch(Exception $e){
			 show_error($e->getMessage());
		 }
	}
}
