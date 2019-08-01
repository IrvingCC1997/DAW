<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuariosAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Usuarios_model');
        // Utilizamos la librería encryption para cifrar la contraseña
		$this->load->library('encryption');
	}

	public function index(){
		if($this->session->userdata('login') == true){
			if($this->session->userdata('permisos') >= 1){
				$data['products'] = $this->Usuarios_model->verUsuarios();
				$this->load->view('Admin/usuariosAdmin', $data);
			}else{
				redirect('Cuenta');
			}
		}else{
			redirect('Cuenta');
		}
	}

	public function add_user(){
		$this->load->view('Admin/addUser');
	}
	
	public function logout(){
        $this->session->sess_destroy();
        redirect('Admin');
    }

    public function login(){
        // Ciframos lo que recibimos por post en la contraseña y lo encriptamos
		$ciphertext = $this->encryption->encrypt($this->input->post("pass"));

		// Enviamos lo que recibimos al modelo
		$this->Usuarios_model->set_noUsuario($this->input->post("noUsuario"));

		// Hacemos la consulta al modelo y lo que retorne lo guardamos en una variable
		$dataLog = $this->Usuarios_model->adminLogin();

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
	
	public function registrarAdministrador(){
		// Ciframos lo que tenga la variable contrasena
		$ciphertext = $this->encryption->encrypt($this->input->post("pass"));

		// Asignamos los valores del formulario al modelo
		$this->Usuarios_model->set_noUsuario($this->input->post("noUsuario"));
        $this->Usuarios_model->set_nombreUsuario($this->input->post("nombre"));
		$this->Usuarios_model->set_apellidoUsuario($this->input->post("apellido"));
		$this->Usuarios_model->set_permisos(2);

		// Pasamos la contraseña cifrada al modelo
		$this->Usuarios_model->set_contrasenaUsuario($ciphertext);
        $this->Usuarios_model->registrar_User();
        redirect('UsuariosAdmin');
	}

	public function modificarUsuarios($noUsuario){
        if($this->session->userdata('login') == true){
            if($this->session->userdata('permisos') >= 1){
                $this->Usuarios_model->set_noUsuario($noUsuario);
                $dataModify['modifyUser'] = $this->Usuarios_model->listarPorUsuario();
                $this->load->view('Admin/modificarUsuario', $dataModify);
            }else{
                redirect('Cuenta');
            }
        }else{
            redirect('Cuenta');
        }
	}
	
	public function updateUser(){
		// Ciframos lo que tenga la variable contrasena
		$ciphertext = $this->encryption->encrypt($this->input->post("pass"));

		// Asignamos los valores del formulario al modelo
		$this->Usuarios_model->set_noUsuario($this->input->post("noUsuario"));
        $this->Usuarios_model->set_nombreUsuario($this->input->post("nombre"));
		$this->Usuarios_model->set_apellidoUsuario($this->input->post("apellido"));

		// Pasamos la contraseña cifrada al modelo
		$this->Usuarios_model->set_contrasenaUsuario($ciphertext);
        $this->Usuarios_model->updateUser();
        redirect('UsuariosAdmin');
	}

	public function eliminarUsuarios($noUsuario){
        $this->Usuarios_model->set_noUsuario($noUsuario);
        $this->Usuarios_model->deleteUser();
        redirect('UsuariosAdmin');
	}
}
