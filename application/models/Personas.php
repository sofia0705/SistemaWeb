<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function guardarUsuario($data){

        $campos = array(
            'nombre_usuario' => $data['nombre_usuario'],
            'contrasena' => $data['contrasena'],
            'id_persona' => $data['id_persona'],
            
        );
        $this->db->insert('personas',$campos);
    }
}