<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario');
        $this->load->model('Personas');
        $this->load->library('encryption');
    }

	
	public function index()
	{
		$this->load->view('admin/vistapers');
	}
    public function guardar(){
       //usuario
        $param['nombre'] = $this->input->post('txtnombre');
        $param['appaterno'] = $this->input->post('txtappaterno');
        $param['apmaterno'] = $this->input->post('txtapmaterno');
        $param['fecnac'] = $this->input->post('datfecnac');
        $param['correo'] = $this->input->post('txtcorreo');

        //alta usuario
        $data['nombre_usuario'] = $this->input->post('user');
        $data['contrasena'] = $this->input->post('txtcontrasena');
        
        
        $lastid = $this->Usuario->guardar($param);
    
       if($lastid > 0){
        $data['id_persona'] = $lastid;
        $this->Personas->guardarUsuario($data);
    }
    }
    public function actualizarDatos(){
        $dato['nombre'] = $this->input->post('txtnombre');
        $dato['appaterno'] = $this->input->post('txtappaterno');
        $dato['apmaterno'] = $this->input->post('txtapmaterno');
        $dato['correo'] = $this->input->post('txtcorreo');

        $this->Usuario->actualizarDatos($dato);
        redirect('Registro');
    }
    
}
