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
}