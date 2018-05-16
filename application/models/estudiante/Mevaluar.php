<?php

class Mevaluar extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getListar() {
        $indice = $this->session->userdata('s_idpersona');
        $this->db->select('TB1.id_estudiante, TB2.cod_profesor, TB3.nombre1, TB3.apellido1, TB2.cod_profesor, TB2.cod_sede, TB2.cod_facultad, TB2.cod_departamento, TB1.id_profesor, TB1.fecha_asignacion, TB1.estatus, TB2.id_persona');
        $this->db->from('tbl_estudiante_profesor TB1');
        $this->db->join('tbl_profesor TB2', 'TB1.id_profesor = TB2.id_profesor');
        $this->db->join('tbl_persona TB3', 'TB2.id_persona = TB3.idpersona');
        $this->db->join('tbl_estudiante TB4', 'TB1.id_estudiante = TB4.id_estudiante');
        $this->db->where('TB4.id_persona', $indice);
        //$this->db->where('TB1.id_estudiante', $indice);
        $r = $this->db->get();
        return $r->result();
    }

    public function getProfesor($id_profesor) {
        $this->db->select('TB1.id_profesor, TB1.cod_profesor, TB1.cod_categoria, TB1.cod_sede, TB1.cod_facultad, TB1.cod_departamento, TB2.nombre');
        $this->db->from('tbl_profesor TB1');
        $this->db->join('cat_facultad TB2', 'TB1.cod_facultad = TB2.cod_facultad');
        $this->db->where('TB1.id_profesor', $id_profesor);
        $r = $this->db->get();
        return $r->row();
    }

    public function guardarEvaluacion($param) {
        $campos = array(
            'cod_sede' => $param['cod_sede'],
            'cod_facultad' => $param['cod_facultad'],
            'cod_profesor' => $param['cod_profesor'],
            'usuario' => $param['usuario'],
            'estatus' => $param['estatus'],
            'p1' => $param['p1'],
            'p2' => $param['p2'],
            'p3' => $param['p3'],
            'p4' => $param['p4'],
            'p5' => $param['p5'],
            'p6' => $param['p6'],
            'p7' => $param['p7'],
            'p8' => $param['p8'],
            'p9' => $param['p9'],
            'p10' => $param['p10'],
            'p11' => $param['p11'],
            'p12' => $param['p12'],
            'p13' => $param['p13'],
            'p14' => $param['p14'],
            'p15' => $param['p15'],
            'p16' => $param['p16'],
            'p17' => $param['p17']
        );
        $this->db->insert('tbl_evaluacion_estudiante', $campos);
    }

    public function buscarEstudiante($dato1) {
        $this->db->select('TB1.id_estudiante');
        $this->db->from('tbl_estudiante TB1');
        $this->db->where('TB1.id_persona', $dato1);
        $resultado = $this->db->get();
        if ($resultado->num_rows() == 1) {
            $r = $resultado->row();
            return $r->id_estudiante;
        }
    }

    public function actualizarDatos($param2) {
        $campos = array(
            'estatus' => $param2['valor'],
            'fecha_evaluacion' => $param2['fecha_evaluacion']
        );
        $array = array('id_estudiante' => $param2['id_est'], 'id_profesor' => $param2['id_pro']);
        $this->db->where($array);
        $this->db->update('tbl_estudiante_profesor', $campos);
    }

}
