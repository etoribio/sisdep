<?php

class Musuario extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function ingresar($usuario, $password) {
        //$band = 1;
        $this->db->select('tu.idusuario, tu.idpersona, tu.username, tp.nombre1, tp.nombre2, tp.apellido1, tp.apellido2, tp.email, tu.idusuario_grupo, tug.nombre, tp.sexo');
        $this->db->from('tbl_persona tp');
        $this->db->join('tbl_usuario tu', 'tp.idpersona = tu.idpersona');
        $this->db->join('cat_usuario_grupo tug', 'tu.idusuario_grupo = tug.idusuario_grupo');
        $this->db->where('tu.username', $usuario);
        $this->db->where('tu.clave', $password);
        $resultado = $this->db->get();

        if ($resultado->num_rows() == 1) {
            $r = $resultado->row();
            $s_usuario = array(
                's_idpersona' => $r->idusuario,
                's_idpersona2' => $r->idpersona,
                's_user' => $r->username,
                's_name' => $r->nombre1 . " " . $r->apellido1,
                's_rol' => $r->idusuario_grupo,
                's_rolname' => $r->nombre,
                's_sexo' => $r->sexo,
                's_email' => $r->email
            );
            $this->session->set_userdata($s_usuario);
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarusuario($param) {
        $campos = array(
            'username' => $param['usuario'],
            'clave' => $param['clave'],
            'idpersona' => $param['idPersona'],
            'fechas' => $param['fechas']
        );
        $this->db->insert('tbl_usuarios', $campos);
    }

    public function eliminar($idP) {
        $this->db->where('idpersona', $idP);
        $this->db->delete('tbl_usuarios');
    }

}
