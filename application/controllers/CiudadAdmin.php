<?php
/*
* Controlador Ciudad 
*
* @author Eduardo Perez
* @package application/controllers
*
* @version 1.0.0
* Creado -
* Ultima modificación de 01/08/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class CiudadAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	// Funcion que se ejecuta cuando se carga el controlador
	public function index(){
		if($this->session->userdata('login') == true){
			if($this->session->userdata('permisos') >= 1){
				try{
					// Se instancia grosery para utilizarlo más adelante
					$crud = new grocery_CRUD();
					$crud->set_theme('bootstrap-v4');
					$crud->set_table('ciudad');
					// Cambia el nombre de la table (Alias)
					$crud->set_subject('Ciudad');
					$crud->columns('nombreCiudad', 'idEstadoC');
					$crud->required_fields('nombreCiudad', 'idEstadoC');
		
					// Se utiliza la relación que hay con la tabla estado
					$crud->set_relation('idEstadoC', 'estado', 'idEstado');
					$crud->display_as('idEstadoC', 'Estado');
					
					// Renderizamos el contenido cn el navegador
					$output = $crud->render();
						
					/*
						* Cargamos la vista
						* Es un casteo
					*/
					$this->load->view('Admin/ciudadAdmin.php', (array)$output);
				 }catch(Exception $e){
					 show_error($e->getMessage());
				 }
			}else{
				redirect('Cuenta');
			}
		}else{
			redirect('Cuenta');
		}
	}
}
