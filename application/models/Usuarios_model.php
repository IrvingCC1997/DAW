<?php
/*
* Modelo Admin 
*
* @author Alberto León
* @package application/models
*
* @version 1.0.0
* Creado miercoles, 31/07/2019
* Ultima modificación de 31/07/2019
*/
defined('BASEPATH') OR exit("You can't here");

class Usuarios_model extends CI_Model{
    private $_noUsuario;
    private $_nombreUsuario;
    private $_apellidoUsuario;
    private $_contrasenaUsuario;
    private $_permisos;

    function __construct(){
        parent::__construct();
    }

    public function get_noUsuario(){
		return $this->_noUsuario;
	}

	public function set_noUsuario($_noUsuario){
		$this->_noUsuario = $_noUsuario;
	}

	public function get_nombreUsuario(){
		return $this->_nombreUsuario;
	}

	public function set_nombreUsuario($_nombreUsuario){
		$this->_nombreUsuario = $_nombreUsuario;
	}

	public function get_apellidoUsuario(){
		return $this->_apellidoUsuario;
	}

	public function set_apellidoUsuario($_apellidoUsuario){
		$this->_apellidoUsuario = $_apellidoUsuario;
	}

	public function get_contrasenaUsuario(){
		return $this->_contrasenaUsuario;
	}

	public function set_contrasenaUsuario($_contrasenaUsuario){
		$this->_contrasenaUsuario = $_contrasenaUsuario;
	}

	public function get_permisos(){
		return $this->_permisos;
	}

	public function set_permisos($_permisos){
		$this->_permisos = $_permisos;
	}

	public function verUsuarios(){
		// Hacemos la consulta a la BD
		$this->db->select('noUsuario, nombreUsuario, apellidoUsuario, permisos');
		$this->db->from('usuarios');
		$products = $this->db->get('');
		return $products->result();
	}

	public function adminLogin(){
		// Hacemos la consulta a la BD
		$this->db->where('noUsuario', $this->_noUsuario);
		$this->db->select('contrasenaUsuario, noUsuario, permisos');
		$this->db->from('usuarios');
		$getDB = $this->db->get('');
		return $getDB->result();
	}

	public function registrar_User(){
        $data = array(
            'noUsuario' => $this->_noUsuario,
            'nombreUsuario' => $this->_nombreUsuario,
			'apellidoUsuario' => $this->_apellidoUsuario,
			'contrasenaUsuario' => $this->_contrasenaUsuario,
            'permisos' => $this->_permisos
        );
        $this->db->insert('usuarios', $data);
	}
	
	public function listarPorUsuario(){
		$this->db->where('noUsuario', $this->_noUsuario);
		$this->db->select('*');
		$this->db->from('usuarios');
		$modifyUser = $this->db->get();
		return $modifyUser->result();
	}

	public function updateUser(){
		$this->db->set('nombreUsuario', $this->_nombreUsuario);
		$this->db->set('apellidoUsuario', $this->_apellidoUsuario);
		$this->db->set('contrasenaUsuario', $this->_contrasenaUsuario);
		$this->db->where('noUsuario', $this->_noUsuario);
		$this->db->update('usuarios');
	}

	public function deleteUser(){
		$this->db->where('noUsuario', $this->_noUsuario);
		$this->db->delete('usuarios');
	}

}