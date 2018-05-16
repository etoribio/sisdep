<?php

class Evaluacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('estudiante/Mevaluar');
        $this->load->model('estudiante/Mactualizar');
    }

    public function registrarEvaluacion() {
        $this->output->enable_profiler(TRUE);
        $band = 1;
        $param['cod_sede'] = $this->input->post('txtCodSede');
        $param['cod_facultad'] = $this->input->post('txtCodFacultad');
        $param['cod_profesor'] = $this->input->post('txtCodProfesor');
        $param['usuario'] = $this->session->userdata('s_user');
        $param['estatus'] = $band;
        $param['p1'] = $this->input->post('radioP1');
        $param['p2'] = $this->input->post('radioP2');
        $param['p3'] = $this->input->post('radioP3');
        $param['p4'] = $this->input->post('radioP4');
        $param['p5'] = $this->input->post('radioP5');
        $param['p6'] = $this->input->post('radioP6');
        $param['p7'] = $this->input->post('radioP7');
        $param['p8'] = $this->input->post('radioP8');
        $param['p9'] = $this->input->post('radioP9');
        $param['p10'] = $this->input->post('radioP10');
        $param['p11'] = $this->input->post('radioP11');
        $param['p12'] = $this->input->post('radioP12');
        $param['p13'] = $this->input->post('radioP13');
        $param['p14'] = $this->input->post('radioP14');
        $param['p15'] = $this->input->post('radioP15');
        $param['p16'] = $this->input->post('radioP16');
        $param['p17'] = $this->input->post('radioP17');
        $this->Mevaluar->guardarEvaluacion($param);

        /*         * * se pasa por sesion el idpersona del usuario ** */
        $dato1 = $this->session->userdata('s_idpersona');
        $param2['id_est'] = $this->Mevaluar->buscarEstudiante($dato1);
        $param2['id_pro'] = $this->input->post('txtIdProfesor');
        $param2['fecha_evaluacion'] = date("Y-m-d H:i:s");
        $param2['valor'] = 1;
        $this->Mevaluar->actualizarDatos($param2);

        /*         * * se pasa a la vista de registro satisfactorio ** */
        $datos['titulo'] = 'Básico';
        $datos['contenido'] = 'estudiante/vexito';
        $this->load->view('plantillas/plantillaestudiante', $datos);
    }

}
