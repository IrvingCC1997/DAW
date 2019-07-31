<?php
/*
* Controlador Admin 
*
* @author Alberto León
* @package application/controllers
*
* @version 1.0.0
* Creado miercoles, 31/07/2019
* Ultima modificación de 31/07/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('Admin_model');

        // Utilizamos la librería encryption para cifrar la contraseña
		$this->load->library('encryption');
    }

    public function index(){
        $this->load->view('Admin/adminLog');
    }

    public function login(){
        // Ciframos lo que recibimos por post en la contraseña y lo encriptamos
		$ciphertext = $this->encryption->encrypt($this->input->post("pass"));

		// Enviamos lo que recibimos al modelo
		$this->Admin_model->set_noUsuario($this->input->post("noUsuario"));

		// Hacemos la consulta al modelo y lo que retorne lo guardamos en una variable
		$dataLog = $this->Admin_model->adminLogin();

		// Revisamos si el usuario existe
		if($dataLog != null){
			// Como retorna un array lo tenemos que recorrer
			foreach($dataLog as $aux){
				// Lo que regrese en la variable contrasena lo guardamos en otra variable
				$password = $aux->contrasenaUsuario;
				$noUsuario = $aux->noUsuario;
				$permisos = $aux->permisos;
			}

			// Desencriptamos ambas contraseñas y comparamos si son similares las contraseñas
			if($this->encryption->decrypt($ciphertext) == $this->encryption->decrypt($password)){
				
				// Asignamos valores a un array para utilizar con las sesiones 
				$dataLogin = array(
					'permisos' => $permisos,
					'noUsuario' => $noUsuario,
					'login' => true
				);

				// Pasamos el array con la información de recuperada en la consulta
				$this->session->set_userdata($dataLogin);
				redirect('ciudadAdmin');
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
}