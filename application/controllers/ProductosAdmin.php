<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductosAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('productos');
			// Cambia el nombre de la table (Alias)
			$crud->set_subject('Productos');
			$crud->columns('nombre', 'descripcion', 'precioVenta', 'precioCompra', 'stock', 'noUsuarioP', 'idImagenesP', 'idCategoriaP');
			$crud->required_fields('nombre', 'descripcion', 'precioVenta', 'precioCompra', 'stock');

			/*
				* Se comienza a construir las relaciones,
				* esta tabla tiene tres relaciones.
			*/
			$crud->set_relation('noUsuarioP', 'usuarios', 'noUsuario');
			// Cambia el nombre a nivel del campo (Alias)
			$crud->display_as('noUsuarioP', 'Usuario');

			$crud->set_relation('idImagenesP', 'imagenes', 'idImagen');
			$crud->display_as('idImagenesP', 'Imagen');

			$crud->set_relation('idCategoriaP', 'categoria', 'idCategoria');
			$crud->display_as('idCategoriaP', 'Categoria');
			
			$output = $crud->render();
			$this->load->view('Admin/productosAdmin.php', (array)$output);
		 }catch(Exception $e){
			 show_error($e->getMessage());
		 }
	}
}
