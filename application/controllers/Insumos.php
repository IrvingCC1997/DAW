<?php
/*
* Controlador Insumos 
*
* @author Alberto León
* @package application/controller
*
* @version 1.0.0
* Creado -
* Ultima modificación de 01/08/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Insumos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Productos_model');
	}

	public function index(){
		$data['title'] = 'Insumos Agricolas | Agrotracsem';
		$product['productos'] = $this->Productos_model->categoriaInsumo();
        $this->load->view('components/header', $data);
        $this->load->view('insumos', $product);
        $this->load->view('components/footer');
	}
}
