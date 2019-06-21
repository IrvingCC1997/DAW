<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historia extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Historia | Agrotracsem';
        $this->load->view('components/header', $data);
        $this->load->view('historia');
        $this->load->view('components/footer');
	}
}
