<?php
/*
* Controlador Cuenta 
*
* @author Alberto León
* @package application/controllers
*
* @version 1.0.0
* Creado lunes, 30/07/2019
* Ultima modificación de 30/07/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Cuenta_model');

		// Utilizamos la librería encryption para cifrar la contraseña
		$this->load->library('encryption');
	}

	public function index(){
        $this->load->view('cuenta');
	}

	public function nuevaCuenta(){
		$this->load->view('nuevacuenta');
	}

	public function login(){
		// Ciframos lo que recibimos por post en la contraseña y lo encriptamos
		$ciphertext = $this->encryption->encrypt($this->input->post("pass"));
		// Enviamos lo que recibimos al modelo
		$this->Cuenta_model->set_correoCliente($this->input->post("mail"));
		// Hacemos la consulta al modelo y lo que retorne lo guardamos en una variable
		$dataLog = $this->Cuenta_model->log();
		
		// Como retorna un array lo tenemos que recorrer
		foreach($dataLog as $aux){
			// Lo que regrese en la variable contrasena lo guardamos en otra variable
			$password = $aux->contrasena;
			$nombre = $aux->nombreCliente;
		}

		// Desencriptamos ambas contraseñas y comparamos si son similares las contraseñas
		if($this->encryption->decrypt($ciphertext) == $this->encryption->decrypt($password)){
			echo "Se armo " . $nombre;
		}else{
			echo "no se armo :(";
		}
	}

	public function registrar(){
		// Ciframos lo que tenga la variable contrasena
		$ciphertext = $this->encryption->encrypt($this->input->post("pass"));

		// Asignamos los valores del formulario al modelo
		$this->Cuenta_model->set_nombreCliente($this->input->post("nombre"));
        $this->Cuenta_model->set_apellidoCliente($this->input->post("apellido"));
		$this->Cuenta_model->set_correoCliente($this->input->post("mail"));
		// Pasamos la contraseña cifrada al modelo
		$this->Cuenta_model->set_contrasena($ciphertext);
        $this->Cuenta_model->registrar_Usuario();
        redirect('Inicio');
	}

}
