<?php
/*
* Vista Clientes 
*
* @author Joana Dominguez
* @package application/controllers
*
* @version 1.0.0
* Creado -
* Ultima modificación de 01/08/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientesAdmin extends CI_Controller {

	// Función que ejecuta el constructor
	public function __construct(){
		parent::__construct();

		// Cargamos la librería de Grosery Crud
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		if($this->session->userdata('login') == true){
			if($this->session->userdata('login') >= 1){
				// Se utiliza un try porque estamos trabajando con bases de datos.
				try{
					$crud = new grocery_CRUD();
					// EL nombre del tema que se va a utilizar
					$crud->set_theme('bootstrap-v4');
					$crud->set_table('clientes');
					// Cambia el nombre de la table (Alias)
					$crud->set_subject('Clientes');
					$crud->columns('nombreCliente', 'apellidoCliente', 'correoElectronico');
					$crud->required_fields('nombreCliente', 'apellidoCliente', 'correoElectronico', 'contrasena');
					
					// Indicamos que elimine los botones de agregar, eliminar y borrar
					$crud->unset_add();
					$crud->unset_edit();
					$crud->unset_delete();
			
					$output = $crud->render();
					// Es un casteo por eso se antepone la palabra array
					$this->load->view('Admin/clientesA.php', (array)$output);
				}catch(Exception $e){
					// Si hay un error se muestra en pantalla
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
