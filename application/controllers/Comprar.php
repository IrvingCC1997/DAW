<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Comprar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
       // $this->load->model('Comprar_model');
    }

    public function index(){
        if($this->session->userdata('login') == true){
            $data['title'] = 'Finalizar compra | Agrotracsem';
            $this->load->view('comprar');
        }else{
            redirect('carrito');
        }
    }
}