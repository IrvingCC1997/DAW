<?php
/*
* Controlador Mecanico 
*
* @author Alberto León
* @package application/controller
*
* @version 1.0.0
* Creado -
* Ultima modificación de 01/08/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Mecanico extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Productos_model');
	}

	public function index(){
		$data['title'] = 'Servicios Mecánicos | Agrotracsem';
		$product['productos'] = $this->Productos_model->categoriaMecanico();
        $this->load->view('components/header', $data);
        $this->load->view('mecanico', $product);
        $this->load->view('components/footer');
	}
}