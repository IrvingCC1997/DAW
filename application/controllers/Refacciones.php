<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refacciones extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Refacciones | Agrotracsem';
        $this->load->view('components/header', $data);
        $this->load->view('refacciones');
        $this->load->view('components/footer');
	}
}