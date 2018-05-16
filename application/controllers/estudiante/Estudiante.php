
<?php

class Estudiante extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('estudiante/Mevaluar');
        $this->load->library('form_validation');
    }

    public function basico() {
        $this->output->enable_profiler(TRUE);
        $datos['casos'] = $this->Mevaluar->getListar();
        $datos['titulo'] = 'Básico';
        $datos['contenido'] = 'estudiante/vcapform2g';
        $this->load->view('plantillas/plantillaestudiante', $datos);
    }

    public function evaluacion2g($id_profesor) {
        $this->output->enable_profiler(TRUE);
        $datos['caso'] = $this->Mevaluar->getProfesor($id_profesor);
        $datos['titulo'] = 'Odontología';
        $datos['contenido'] = 'estudiante/vform2g';
        $this->load->view('plantillas/plantillaestudiante', $datos);
    }

    public function odontologia() {
        $this->output->enable_profiler(TRUE);
        $datos['titulo'] = 'Odontología';
        $datos['contenido'] = 'estudiante/vcapform2e';
        $this->load->view('plantillas/plantillaestudiante', $datos);
    }

    public function validarEvaluacion() {
        $this->form_validation->set_rules('radioP1', 'P1', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->output->enable_profiler(TRUE);
            $datos['titulo'] = 'Validación del Form';
            $datos['contenido'] = 'estudiante/vcapform2g';
            $this->load->view('plantillas/plantillaestudiante', $datos);
        } else {
            $this->output->enable_profiler(TRUE);
            $datos['titulo'] = 'Form Correcto';
            $datos['contenido'] = 'estudiante/vcapform2g';
            $this->load->view('plantillas/plantillaestudiante', $datos);
        }
    }

//    public function getProfesor() {
//        echo json_encode($this->Mevaluar->getListar());
//    }
}
