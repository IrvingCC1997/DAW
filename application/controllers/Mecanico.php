<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mecanico extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Servicios Mecánicos | Agrotracsem';
        $this->load->view('components/header', $data);
        $this->load->view('mecanico');
        $this->load->view('components/footer');
	}
}