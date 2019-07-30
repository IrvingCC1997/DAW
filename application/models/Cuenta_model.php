<?php
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

}