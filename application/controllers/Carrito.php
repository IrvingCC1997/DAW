<?php 
/**/
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carrito extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Carrito_model');
    }

    public function index()
    {
        $data['products'] = $this->Carrito_model->get_all();
        $this->load->view('carrito', $data);
        $this->load->view('components/footer');
    }

    function add()
    {
        $insert_data = array(
        'id' => $this->input->post('id'),
        'name' => $this->input->post('name'),
        'price' => $this->input->post('price'),
        'qty' => 1
        );

        $this->cart->insert($insert_data);

        redirect('carrito');
    }

    function remove($rowid) 
    {
        if ($rowid==="all"){
        $this->cart->destroy();
        }else{
        $data = array(
        'rowid' => $rowid,
        'qty' => 0
        );
        $this->cart->update($data);
        }

        redirect('carrito');
    }

    function update_cart()
    {

        $cart_info = $_POST['cart'];
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];

            $data = array(
            'rowid' => $rowid,
            'price' => $price,
            'amount' => $amount,
            'qty' => $qty
            );

            $this->cart->update($data);
        }
        redirect('carrito');
    }
}
?>