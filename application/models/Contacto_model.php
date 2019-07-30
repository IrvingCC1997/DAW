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

class Contacto_model extends CI_Model{
    private $_idComentario;
    private $_nombreContacto;
    private $_correoContacto;
    private $_mensajeContacto;

    function __construct(){
        parent::__construct();
    }

    // Inicia getters y setters
    public function get_idComentario(){
		return $this->_idComentario;
	}

	public function set_idComentario($_idComentario){
		$this->_idComentario = $_idComentario;
	}

	public function get_nombreContacto(){
		return $this->_nombreContacto;
	}

	public function set_nombreContacto($_nombreContacto){
		$this->_nombreContacto = $_nombreContacto;
	}

	public function get_correoContacto(){
		return $this->_correoContacto;
	}

	public function set_correoContacto($_correoContacto){
		$this->_correoContacto = $_correoContacto;
	}

	public function get_mensajeContacto(){
		return $this->_mensajeContacto;
	}

	public function set_mensajeContacto($_mensajeContacto){
		$this->_mensajeContacto = $_mensajeContacto;
	}
    
    // Agrega los comentarios
    public function add_Comentario(){
        $data = array(
            'nombreContacto' => $this->_nombreContacto,
            'correoContacto' => $this->_correoContacto,
            'mensaje' => $this->_mensajeContacto
        );
        $this->db->insert('contacto', $data);
    }

}