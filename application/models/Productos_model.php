<?php
/*
* Modelo Productos 
*
* @author Alberto León
* @package application/models
*
* @version 1.0.0
* Creado lunes, 01/08/2019
* Ultima modificación de 01/08/2019
*/
defined('BASEPATH') OR exit("You can't here");

class Productos_model extends CI_Model{
    private $_idProducto;
    private $_nombreProducto;
    private $_descripcionProducto;
    private $_precioVenta;
    private $_precioCompra;
    private $_stock;
    private $_idImagenesP;
    private $_idCategoriaP;

    function __construct(){
        parent::__construct();
    }

    public function get_idProducto(){
		return $this->_idProducto;
	}

	public function set_idProducto($_idProducto){
		$this->_idProducto = $_idProducto;
	}

	public function get_nombreProducto(){
		return $this->_nombreProducto;
	}

	public function set_nombreProducto($_nombreProducto){
		$this->_nombreProducto = $_nombreProducto;
	}

	public function get_descripcionProducto(){
		return $this->_descripcionProducto;
	}

	public function set_descripcionProducto($_descripcionProducto){
		$this->_descripcionProducto = $_descripcionProducto;
	}

	public function get_precioVenta(){
		return $this->_precioVenta;
	}

	public function set_precioVenta($_precioVenta){
		$this->_precioVenta = $_precioVenta;
	}

	public function get_precioCompra(){
		return $this->_precioCompra;
	}

	public function set_precioCompra($_precioCompra){
		$this->_precioCompra = $_precioCompra;
	}

	public function get_stock(){
		return $this->_stock;
	}

	public function set_stock($_stock){
		$this->_stock = $_stock;
	}

	public function get_idImagenesP(){
		return $this->_idImagenesP;
	}

	public function set_idImagenesP($_idImagenesP){
		$this->_idImagenesP = $_idImagenesP;
	}

	public function get_idCategoriaP(){
		return $this->_idCategoriaP;
	}

	public function set_idCategoriaP($_idCategoriaP){
		$this->_idCategoriaP = $_idCategoriaP;
    }
    
    public function categoriaInsumo(){
        $this->db->where('nombreCategoria', "Insumos agrícolas");
		$this->db->select('*');
        $this->db->from('productos');
        $this->db->join('categoria', 'categoria.idCategoria = productos.idCategoriaP');
        $this->db->join('imagenes', 'imagenes.idImagen = productos.idImagenesP');
		$productos = $this->db->get('');
		return $productos->result();
    }

    public function categoriaMecanico(){
        $this->db->where('nombreCategoria', "Servicio mecánico");
		$this->db->select('*');
        $this->db->from('productos');
        $this->db->join('categoria', 'categoria.idCategoria = productos.idCategoriaP');
        $this->db->join('imagenes', 'imagenes.idImagen = productos.idImagenesP');
		$productos = $this->db->get('');
		return $productos->result();
    }

    public function categoriaRefaccion(){
        $this->db->where('nombreCategoria', "Refacciones");
		$this->db->select('*');
        $this->db->from('productos');
        $this->db->join('categoria', 'categoria.idCategoria = productos.idCategoriaP');
        $this->db->join('imagenes', 'imagenes.idImagen = productos.idImagenesP');
		$productos = $this->db->get('');
		return $productos->result();
	}
	
	public function listarPorProducto(){
        $this->db->where('idProducto', $this->_idProducto);
		$this->db->select('*');
        $this->db->from('productos');
        $this->db->join('categoria', 'categoria.idCategoria = productos.idCategoriaP');
        $this->db->join('imagenes', 'imagenes.idImagen = productos.idImagenesP');
		$productos = $this->db->get('');
		return $productos->result();
    }

}