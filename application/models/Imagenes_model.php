<?php
/*
* Modelo Imagenes 
*
* @author Irving Cruz
* @package application/models
*
* @version 1.0.0
* Creado jueves, 01/08/2019
* Ultima modificación de 01/08/2019
*/
defined('BASEPATH') OR exit("You can't here");

class Imagenes_model extends CI_Model{
    private $_idImagen;
    private $_imagen1;
    private $_imagen2;
    private $_imagen3;

    function __construct(){
        parent::__construct();
    }

    public function get_idImagen(){
		return $this->_idImagen;
	}

	public function set_idImagen($_idImagen){
		$this->_idImagen = $_idImagen;
	}

	public function get_imagen1(){
		return $this->_imagen1;
	}

	public function set_imagen1($_imagen1){
		$this->_imagen1 = $_imagen1;
	}

	public function get_imagen2(){
		return $this->_imagen2;
	}

	public function set_imagen2($_imagen2){
		$this->_imagen2 = $_imagen2;
	}

	public function get_imagen3(){
		return $this->_imagen3;
	}

	public function set_imagen3($_imagen3){
		$this->_imagen3 = $_imagen3;
    }

    public function eliminarImagen(){
		$this->db->where('idImagen', $this->_idImagen);
		$this->db->delete('imagenes');
    }
    
    public function verImagenes(){
		// Hacemos la consulta a la BD
		$this->db->select('*');
		$this->db->from('imagenes');
		$images = $this->db->get('');
		return $images->result();
    }
    
    public function agregarImage(){
        $data = array(
            'imagen1' => $this->_imagen1,
            'imagen2' => $this->_imagen2,
            'imagen3' => $this->_imagen3
        );
        $this->db->insert('imagenes', $data);

    }
}