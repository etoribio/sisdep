<?php

class Mactualizar extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function buscarEstudiante($x) {
        $this->db->select('TB1.id_estudiante');
        $this->db->from('tbl_estudiante TB1');
        $this->db->where('TB1.id_persona', $x);
        $r = $this->db->get();
        return $r->row();
    }

    public function actualizarDatos($param2) {
        $array = array('id_estudiante' => $param2['id_est'], 'id_profesor' => $param2['id_pro']);
        $campos = array(
            'estatus' => $param2['valor'],
            'fecha_evaluacion' => $param2['fecha_evaluacion']
        );
        
        $this->db->where($array);
        $this->db->update('tbl_estudiante_profesor', $campos);
    }

}
