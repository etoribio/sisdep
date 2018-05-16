<div class="card">
    <div class="card-header light-blue darken-4 text-white">
        Profesores a evaluar por el estudiante [Cap_Form2G]
    </div>
</div>
<br>
<div class="table table-responsive dataTable_wrapper">
    <table width="100%" class="table table-hover">
        <thead class="light-blue darken-4">
            <tr class="text-white">
                <th scope="row">Código profesor</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Código sede</th>
                <th>Código facultad</th>
                <th>Código departamento</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($casos as $caso): ?>
                <tr>
                    <th scope="row"><span style='color:#e65100;'><i class="fa fa-file-text" aria-hidden="true"></i>&nbsp;<?php echo $caso->cod_profesor; ?></span></th>
                    <th><span style='color:#1a237e;'><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php echo $caso->nombre1; ?></span></th>
                    <th><span style='color:#1a237e;'><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php echo $caso->apellido1; ?></span></th>
                    <th><span style='color:#1a237e;'><i class="fa fa-university" aria-hidden="true"></i>&nbsp;<?php echo $caso->cod_sede; ?></span></th>
                    <th><span style='color:#1a237e;'><i class="fa fa-university" aria-hidden="true"></i>&nbsp;<?php echo $caso->cod_facultad; ?></span></th>
                    <th><span style='color:#1a237e;'><i class="fa fa-university" aria-hidden="true"></i>&nbsp;<?php echo $caso->cod_departamento; ?></span></th>
                    <th>
                        <?php if ($caso->estatus == 0) { ?>
                            <h6><span class='badge badge-warning'>Sin evaluar</span></h6>
                            <?php
                        } else if ($caso->estatus == 1) {
                            ?>
                            <h6><span class='badge badge-success'>Evaluado</span></h6>
                        <?php }
                        ?>   
                    </th>
                    <th>
                        <?php if ($caso->estatus == 0) { ?>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">[Seleccione]</button>
                                <div class="dropdown-menu">

                                    <a class="dropdown-item" href="<?php echo base_url(); ?>estudiante/estudiante/evaluacion2g/<?php echo $caso->id_profesor ?>">Crear ficha</a>

                                </div>
                            </div>
                            <?php
                        } else if ($caso->estatus == 1) {
                            ?>
                        <?php }
                        ?>   
                    </th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table> 
</div>
<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
