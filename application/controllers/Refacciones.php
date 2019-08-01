<?php
/*
* Controlador refacciones 
*
* @author Alberto León
* @package application/controller
*
* @version 1.0.0
* Creado -
* Ultima modificación de 01/08/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Refacciones extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Productos_model');
	}

	public function index(){
		$data['title'] = 'Refacciones | Agrotracsem';
		$product['productos'] = $this->Productos_model->categoriaRefaccion();
        $this->load->view('components/header', $data);
        $this->load->view('refacciones', $product);
        $this->load->view('components/footer');
	}
}