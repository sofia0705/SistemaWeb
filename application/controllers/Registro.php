<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario',);
        $this->load->model('musuario');
        
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
        $paramuser['nombre_usuario'] = $this->input->post('user');
        $paramuser['contrasena'] = $this->input->post('txtcontrasena') ;
      
        $lastid = $this->Usuario->guardar($param);
        
        if($lastid > 0){
            $paramuser['id_persona'] = $lastid;
            $this->Musuario->guardarUsuario($paramuser);
        }

        
    }
}
