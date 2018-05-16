<div class="card">
    <div class="card-header light-blue darken-4 text-white">
        [Cap_Form2G]
    </div>
</div>
<br>
<!-- FORMULARIO DE EVALUACION EN MODAL -->
<?php echo validation_errors(); ?>
<form action="<?php echo base_url(); ?>estudiante/evaluacion/registrarEvaluacion" method="post">
    <div class="card-header mdb-color darken-3 text-white">PLANIFICACIÓN DEL CURSO (P)</div>
    <!-- Default form grid -->

    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col">
            <!-- Default input -->
            <input type="hidden" class="form-control" id="mtxtSede" name="txtCodSede" value="<?php echo $caso->cod_sede; ?>">
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col">
            <input type="hidden" class="form-control" id="mtxtIdProfesor" name="txtIdProfesor" value="<?php echo $caso->id_profesor; ?>">
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col">
            <!-- Default input -->
            <input type="hidden" class="form-control" id="mtxtFacultad" name="txtCodFacultad" value="<?php echo $caso->cod_facultad; ?>">
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col">
            <input type="hidden" class="form-control" id="mtxtProfesor" name="txtCodProfesor" value="<?php echo $caso->cod_profesor; ?>">
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col">
            <input type="hidden" class="form-control" id="mtxtPersona" name="txtIdPersona" value="<?php echo $this->session->userdata('s_idpersona'); ?>">
        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->

    <!-- Default form grid -->
    <!--Body-->
    <div>
        <!--Table-->
        <table class="table">
            <!--Table head-->
            <thead class="mdb-color darken-3">
                <tr class="text-white">
                    <th></th>
                    <th>Marcar las preguntas de la No. 1 a la No.4 con la escala.</th>
                    <th>NIVEL DE DOMINIO</th>
                </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>¿Presentó el programa del curso al inicio del semestre?</td>
                    <td class="form-inline">    
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP1" id="radioP1" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP1" id="radioP1" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>¿Explicó cómo se desarrollaría el programa del curso?</td>
                    <td class="form-inline">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP2" id="radioP2" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP2" id="radioP2" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>¿Explicó en contenido del curso?</td>
                    <td class="form-inline">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP3" id="radioP3" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP3" id="radioP3" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>¿Explicó el sistema de calificación del curso al inicio del semestre?</td>
                    <td class="form-inline">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP4" id="radioP4" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP4" id="radioP4" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>
    <!--Footer-->
    <!--Header-->
    <div class="card-header mdb-color darken-3 text-white">DESARROLLO DEL CURSO (DE)</div>
    <!--Body-->
    <div>
        <!--Table-->
        <table class="table">
            <!--Table head-->
            <thead class="mdb-color darken-3">
                <tr class="text-white">
                    <th></th>
                    <th>Conteste las preguntas  No. 5  y  la No. 6 con la escala.</th>
                    <th>NIVEL DE DOMINIO</th>
                </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">5</th>
                    <td>¿Desarrolló el contenido del programa?</td>
                    <td class="form-inline">    
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP5" id="radioP5" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP5" id="radioP5" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td> ¿Respondió las preguntas realizadas por los estudiantes?</td>
                    <td class="form-inline">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP6" id="radioP6" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP6" id="radioP6" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>
    <div class="card-header mdb-color darken-3 text-white">RELACION PROEFESOR-ESTUDIANTE (M)</div>
    <!--Body-->
    <div>
        <!--Table-->
        <table class="table">
            <!--Table head-->
            <thead class="mdb-color darken-3">
                <tr class="text-white">
                    <th></th>
                    <th>Conteste las preguntas  No. 7  y  la No. 11 con la escala.</th>
                    <th>NIVEL DE DOMINIO</th>
                </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">7</th>
                    <td>¿Proporcionó referencias bibliográficas o digitales para el desarrollo del curso?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP7" id="radioP7" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP7" id="radioP7" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td> ¿Atendió las actividades académicas contempladas en el programa?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP8" id="radioP8" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP8" id="radioP8" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td> ¿Motivó la participación de los estudiantes en las diversas actividades del curso?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP9" id="radioP9" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP9" id="radioP9" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td> ¿Mostró una actitud abierta al diálogo y al análisis de todas las ideas?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP10" id="radioP10" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP10" id="radioP10" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td> ¿Discutió el resultado de los exámenes o pruebas parciales?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP11" id="radioP11" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP11" id="radioP11" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>
    <div class="card-header mdb-color darken-3 text-white">DESARROLLO DEL CURSO (DE)</div>
    <!--Body-->
    <div>
        <!--Table-->
        <table class="table">
            <!--Table head-->
            <thead class="mdb-color darken-3">
                <tr class="text-white">
                    <th></th>
                    <th>Conteste las preguntas  No. 12  y  la No. 14 con la escala.</th>
                    <th>NIVEL DE DOMINIO</th>
                </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">12</th>
                    <td>¿Desarrolló el contenido del programa?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP12" id="radioP12" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP12" id="radioP12" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td> ¿Respondió las preguntas realizadas por los estudiantes?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP13" id="radioP13" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP13" id="radioP13" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td> ¿Respondió las preguntas realizadas por los estudiantes?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP14" id="radioP14" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP14" id="radioP14" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>
    <div class="card-header mdb-color darken-3 text-white">EVALUACION DE LOS APRENDIZAJES (E)</div>
    <!--Body-->
    <div>
        <!--Table-->
        <table class="table">
            <!--Table head-->
            <thead class="mdb-color darken-3">
                <tr class="text-white">
                    <th></th>
                    <th>Conteste las preguntas No. 15  a la No. 17 con la escala.</th>
                    <th>NIVEL DE DOMINIO</th>
                </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">15</th>
                    <td>¿Desarrolló el contenido del programa?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP15" id="radioP15" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP15" id="radioP15" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td> ¿Respondió las preguntas realizadas por los estudiantes?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP16" id="radioP16" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP16" id="radioP16" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td> ¿Respondió las preguntas realizadas por los estudiantes?</td>
                    <td class="form-inline">                             
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP17" id="radioP17" value="1">
                            <label class="form-check-label">
                                SI
                            </label>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioP17" id="radioP17" value="0">
                            <label class="form-check-label">
                                NO
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>
    <!--Footer-->
    <div class="text-center py-4 mt-3">
        <button type="submit" id="btnEva1" class="btn btn-dark-green">Grabar<i class="fa fa-paper-plane-o ml-2"></i></button>
    </div>
</form>
<!-- FORMULARIO DE EVALUACION EN MODAL -->
<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
