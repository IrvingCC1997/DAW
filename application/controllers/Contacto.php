<?php
/*
* Controlador Contacto 
*
* @author Alberto León
* @package application/controllers
*
* @version 1.0.0
* Creado lunes, 30/07/2019
* Ultima modificación de 30/07/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Contacto_model');
	}

	public function index(){
		$data['title'] = 'Contactános | Agrotracsem';
        $this->load->view('components/header', $data);
        $this->load->view('contacto');
        $this->load->view('components/footer');
	}

	public function guardarComentario(){
        $this->Contacto_model->set_nombreContacto($this->input->post("nombre"));
        $this->Contacto_model->set_correoContacto($this->input->post("correo"));
        $this->Contacto_model->set_mensajeContacto($this->input->post("mensaje"));
        $this->Contacto_model->add_Comentario();
        redirect('contacto');
    }
}
