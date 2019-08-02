<?php
/*
* Controlador Imagenes 
*
* @author Irving Cruz
* @package application/controlador
*
* @version 1.0.0
* Creado jueves, 01/08/2019
* Ultima modificación de 01/08/2019
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class ImagenesAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Imagenes_model');
	}

	// Funcion que se ejecuta cuando se carga el controlador
	public function index(){
		if($this->session->userdata('login') == true){
			if($this->session->userdata('permisos') >= 1){
                $data['images'] = $this->Imagenes_model->verImagenes();
				$this->load->view('Admin/imagenes', $data);
			}else{
				redirect('Cuenta');
			}
		}else{
			redirect('Cuenta');
		}
    }

    public function agregarImagen(){
        if($this->session->userdata('login') == true){
			if($this->session->userdata('permisos') >= 1){
				$this->load->view('Admin/agregarImagenes');
			}else{
				redirect('Cuenta');
			}
		}else{
			redirect('Cuenta');
		}
    }

    public function agregarImage(){
        $configuration = [
            "upload_path" => "./images/images_upload",
            "allowed_types" => "jpg|jpeg|png"
        ];
        $this->load->library('upload', $configuration);
        if($this->upload->do_upload('imagen_1')){
            $infoFile = $this->upload->data();
            $this->Imagenes_model->set_imagen1($infoFile['file_name']);
            if($this->upload->do_upload('imagen_2')){
                $infoFile = $this->upload->data();
                $this->Imagenes_model->set_imagen2($infoFile['file_name']);
                if($this->upload->do_upload('imagen_3')){
                    $infoFile = $this->upload->data();
                    $this->Imagenes_model->set_imagen3($infoFile['file_name']);
                }
            }
        }else{
            echo $this->upload->display_errors();
        }
        $this->Imagenes_model->agregarImage();
        redirect('ImagenesAdmin');
    }

    
	public function eliminarImagenes($idImagen){
        $this->Imagenes_model->set_idImagen($idImagen);
        $this->Imagenes_model->eliminarImagen();
        redirect('ImagenesAdmin');
	}
}