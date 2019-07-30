<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Cuenta_model');
	}

	public function index(){
        $this->load->view('cuenta');
	}

	public function nuevaCuenta(){
		$this->load->view('nuevacuenta');
	}

	public function registrar(){
		$this->Cuenta_model->set_nombreCliente($this->input->post("nombre"));
        $this->Cuenta_model->set_apellidoCliente($this->input->post("apellido"));
		$this->Cuenta_model->set_correoCliente($this->input->post("mail"));
		$this->Cuenta_model->set_contrasena($this->input->post("pass"));
        $this->Cuenta_model->registrar_Usuario();
        redirect('Inicio');
	}

}
