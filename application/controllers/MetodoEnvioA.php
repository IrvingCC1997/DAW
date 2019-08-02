<?php
/*
* Controlador Metodo de envio 
*
* @author Eduardo Perez
* @package application/controllers
*
* @version 1.0.0
* Creado -
* Ultima modificación de 01/08/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class MetodoEnvioA extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		if($this->session->userdata('login') == true){
			if($this->session->userdata('permisos') >= 1){
				try{
					$crud = new grocery_CRUD();
					$crud->set_theme('bootstrap-v4');
					// Nombre de la tabla que se esta utilizando
					$crud->set_table('metodoenvio');
					// Cambia el nombre de la table (Alias)
					$crud->set_subject('Metodo de Envío');
					$crud->columns('nombreMetodo', 'precioEnvio', 'diasEnvio');
					// Indica los campos obligatorios en el formulario
					$crud->required_fields('nombreMetodo', 'precioEnvio', 'diasEnvio');
					
					// Renderizamos el contenido en pantalla
					$output = $crud->render();
					// Es un casteo
					$this->load->view('Admin/metodoEnvioA.php', (array)$output);
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
