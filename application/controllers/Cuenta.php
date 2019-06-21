<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Mi cuenta | Agrotracsem';
        $this->load->view('components/header', $data);
        $this->load->view('cuenta');
        $this->load->view('components/footer');
	}
}
