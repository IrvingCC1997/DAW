<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacidad extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
        $data['title'] = 'Politica de Privacidad | Agrotracsem';
        $this->load->view('components/header', $data);
        $this->load->view('privacidad');
        $this->load->view('components/footer');
	}
}