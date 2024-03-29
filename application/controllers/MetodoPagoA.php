<?php
/*
* Controlador Metodo de pago 
*
* @author Joana Dominguez
* @package application/controllers
*
* @version 1.0.0
* Creado -
* Ultima modificación de 01/08/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class MetodoPagoA extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// Cargamos la libreria
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		if($this->session->userdata('login') == true){
			if($this->session->userdata('permisos') >= 1){
				try{
					$crud = new grocery_CRUD();
					$crud->set_theme('bootstrap-v4');
					$crud->set_table('metodopago');
					// Cambia el nombre de la table (Alias)
					$crud->set_subject('Metodo de pago');
					$crud->columns('nombreMetodoPago');
					$crud->required_fields('nombreMetodoPago');
		
					$output = $crud->render();
					// Cargamos la vista
					$this->load->view('Admin/metodoPagoA.php', (array)$output);
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
