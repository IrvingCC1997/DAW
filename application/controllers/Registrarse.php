<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrarse extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Registrate | Agrotracsem';
        $this->load->view('components/header', $data);
        $this->load->view('registrate');
        $this->load->view('components/footer');
	}
}