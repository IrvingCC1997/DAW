<?php
/*
* Modelo Cuenta 
*
* @author Alberto León
* @package application/models
*
* @version 1.0.0
* Creado lunes, 30/07/2019
* Ultima modificación de 30/07/2019
*/
defined('BASEPATH') OR exit("You can't here");

class Cuenta_model extends CI_Model{
    private $_idCliente;
    private $_nombreCliente;
    private $_apellidoCliente;
    private $_correoCliente;
    private $_contrasena;

    function __construct(){
        parent::__construct();
    }

    // Getters y setters
	public function get_idCliente(){
		return $this->_idCliente;
	}

	public function set_idCliente($_idCliente){
		$this->_idCliente = $_idCliente;
	}

	public function get_nombreCliente(){
		return $this->_nombreCliente;
	}

	public function set_nombreCliente($_nombreCliente){
		$this->_nombreCliente = $_nombreCliente;
	}

	public function get_apellidoCliente(){
		return $this->_apellidoCliente;
	}

	public function set_apellidoCliente($_apellidoCliente){
		$this->_apellidoCliente = $_apellidoCliente;
	}

	public function get_correoCliente(){
		return $this->_correoCliente;
	}

	public function set_correoCliente($_correoCliente){
		$this->_correoCliente = $_correoCliente;
	}

	public function get_contrasena(){
		return $this->_contrasena;
	}

	public function set_contrasena($_contrasena){
		$this->_contrasena = $_contrasena;
    }
    
    public function registrar_Usuario(){
        $data = array(
            'nombreCliente' => $this->_nombreCliente,
            'apellidoCliente' => $this->_apellidoCliente,
            'correoElectronico' => $this->_correoCliente,
            'contrasena' => $this->_contrasena
        );

        $this->db->insert('clientes', $data);
	}
	
	public function log(){
		// Hacemos la consulta a la BD
		$this->db->where('correoElectronico', $this->_correoCliente);
		$this->db->select('contrasena, nombreCliente');
		$this->db->from('clientes');
		$getDB = $this->db->get('');
		return $getDB->result();
	}

}