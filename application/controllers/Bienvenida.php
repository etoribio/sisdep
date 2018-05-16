<?php

class Bienvenida extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('logeo/Musuario');
    }

    public function index() {
        $this->output->enable_profiler(TRUE);
        $datos['titulo'] = 'SISDEP';
        $datos['contenido'] = 'logeo/vlogin';
        $this->load->view('plantillas/plantillalogeo', $datos);
    }

    public function ingresar() {
        $usuario = $this->security->xss_clean(strip_tags($this->input->post('usuario')));
        $password = md5($this->security->xss_clean(strip_tags($this->input->post('clave'))));
        $res = $this->Musuario->ingresar($usuario, $password);

        if ($res == 1) {
            $rol = $this->session->userdata('s_rol');
            switch ($rol) {
                case 1:
                    $datos['titulo'] = 'Administrador';
                    $datos['contenido'] = 'administrador/vdashboard';
                    $this->load->view('plantillas/plantillaadm', $datos);
                    break;
                case 2:
                    $datos['titulo'] = 'Coordinador';
                    $datos['contenido'] = 'coordinador/vdashboard';
                    $this->load->view('plantillas/plantillaest', $datos);
                    break;
                case 3:
                    $datos['titulo'] = 'Profesor';
                    $datos['contenido'] = 'profesor/vdashboard';
                    $this->load->view('plantillas/plantillaprofesor', $datos);
                    break;
                case 4:
                    $datos['titulo'] = 'Estudiante';
                    $datos['contenido'] = 'estudiante/vdashboard';
                    $this->load->view('plantillas/plantillaestudiante', $datos);
                    break;
                case 4:
                    $datos['titulo'] = 'Comisión';
                    $datos['contenido'] = 'comision/vdashboard';
                    $this->load->view('plantillas/plantillacom', $datos);
                    break;
            }
        } else {
            $datos['titulo'] = "Pagina de logeo";
            $datos['contenido'] = 'logeo/vloginerror';
            $this->load->view('plantillas/plantillalogeo', $datos);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
