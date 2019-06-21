<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Inicio | Agrotracsem';
        $this->load->view('components/header', $data);
        $this->load->view('inicio');
        $this->load->view('components/footer');
	}
}
