<?php
/*
* Controlador Cuenta 
*
* @author Alberto León
* @package application/controllers
*
* @version 1.0.0
* Creado lunes, 29/07/2019
* Ultima modificación de 31/07/2019
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

		// Revisamos si el usuario existe
		if($dataLog != null){
			// Como retorna un array lo tenemos que recorrer
			foreach($dataLog as $aux){
				// Lo que regrese en la variable contrasena lo guardamos en otra variable
				$password = $aux->contrasena;
				$name = $aux->nombreCliente;
				$mail = $aux->correoElectronico;
			}

			// Desencriptamos ambas contraseñas y comparamos si son similares las contraseñas
			if($this->encryption->decrypt($ciphertext) == $this->encryption->decrypt($password)){
				
				// Asignamos valores a un array para utilizar con las sesiones 
				$dataLogin = array(
					'correElectronico' => $mail,
					'nombre' => $name,
					'login' => true
				);

				// Pasamos el array con la información de recuperada en la consulta
				$this->session->set_userdata($dataLogin);
				redirect('Inicio');
			}else{ // La contraseña es correcta
				echo "Contraseña incorrecta";
				die();
				redirect('Cuenta');
			}
		}else{ // El usuario no existe
			echo "No existe el usuario";
			die();
			redirect('Cuenta');
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

		// Aqui se registra el usuario
		$sesion = $this->Cuenta_model->registrar_Usuario();
		
		// Hacemos la consulta al modelo para ver si ya se registro
		$dataLog = $this->Cuenta_model->log();

		// Revisamos si el usuario existe
		if($dataLog != null){
			// Como retorna un array lo tenemos que recorrer
			foreach($dataLog as $aux){
				// Lo que regrese en la variable contrasena lo guardamos en otra variable
				$password = $aux->contrasena;
				$name = $aux->nombreCliente;
				$mail = $aux->correoElectronico;
			}

			// Desencriptamos ambas contraseñas y comparamos si son similares las contraseñas
			if($this->encryption->decrypt($ciphertext) == $this->encryption->decrypt($password)){
				
				// Asignamos valores a un array para utilizar con las sesiones 
				$dataLogin = array(
					'correElectronico' => $mail,
					'nombre' => $name,
					'login' => true
				);

				// Pasamos el array con la información de recuperada en la consulta
				$this->session->set_userdata($dataLogin);
				redirect('Inicio');
			}else{ // La contraseña es correcta
				echo "Contraseña incorrecta";
				die();
				redirect('Cuenta');
			}
		}else{ // El usuario no existe
			echo "No existe el usuario";
			die();
			redirect('Cuenta');
		}
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('Inicio');
    }

}
