<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function guardar($param){
        $campos = array(
            'nombre' => $param['nombre'],
            'appaterno' => $param['appaterno'],
            'apmaterno' => $param['apmaterno'],
            'fecnac' => $param['fecnac'],
            'correo' => $param['correo']
            
        );
        $this->db->insert('usuarios', $campos);

        return $this->db->insert_id();
    }
    public function actualizarDatos($dato){
        $campos = array(
            'nombre' => $dato['nombre'],
            'appaterno' => $dato['appaterno'],
            'apmaterno' => $dato['apmaterno'],
            'fecnac' => $dato['fecnac'],
            'correo' => $dato['correo']
            
        );
        $this->db->update('usuarios',$campos);
        $this->db->where('id_persona',$this->session->userdata('s_id_persona'));

        return 1;

    
    }
}