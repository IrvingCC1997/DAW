<?php
/*
* Controlador Admin 
*
* @author Alberto León
* @package application/controllers
*
* @version 1.0.0
* Creado miercoles, 31/07/2019
* Ultima modificación de 31/07/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
    }

    public function index(){
        $this->load->view('Admin/adminLog');
	}
}