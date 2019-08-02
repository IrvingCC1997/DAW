<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carrito_model extends CI_Model {

    public function get_all()
    {
        $query = $this->db->get('productos');
        return $query->result_array();
    }
}
?>