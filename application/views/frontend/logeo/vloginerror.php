<!--Main layout-->
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong><a href="<?php echo base_url(); ?>bienvenida" class="alert-link">¡Error de credenciales!</a></strong> Usuario o contraseña incorrecta.
</div>
<main class="mt-2 pt-2">
    <div class="container">
        <!--Section: Cards-->
        <section>
            <div class="row">
                <div class="col-md-4">
                    <!-- Card -->
                    <div class="card mx-xl-5">
                        <!--Header-->
                        <div class="modal-header mdb-color darken-3 white-text">
                            <h5 class="title">
                                <i class="fa fa-pencil"></i> Iniciar sesión
                            </h5>
                        </div>
                        <!--Header-->
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Default form subscription -->
                            <form action="<?php echo base_url(); ?>bienvenida/ingresar" method="post">
                                <!-- Default input name -->
                                <label  class="grey-text font-weight-light">Usuario</label>
                                <input type="text"  class="form-control" name="usuario">
                                <br>
                                <!-- Default input email -->
                                <label  class="grey-text font-weight-light">Contrasena</label>
                                <input type="password" class="form-control" name="clave">
                                <div class="text-center py-4 mt-3">
                                    <button type="submit" class="btn btn-dark-green">Ingresar<i class="fa fa-paper-plane-o ml-2"></i></button>
                                </div>
                            </form>
                            <!-- Default form subscription -->
                        </div>
                        <!-- Card body -->
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-8 ">
                    <ul class="list-unstyled">
                        <li class="media">
                            <div class="media-body">
                                <blockquote class="blockquote bq-primary">
                                    <p class="bq-title"> <span class="badge indigo"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></span>&nbsp;SISDEP</p>
                                    <p>Sistema de evaluación de los profesores de la Universidad de Panamá, basado en las funciones de: Docencia, Administración, Investigación, Extensión, Produccción y Servicios.</p>
                                </blockquote>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Section: Cards-->
    </div>
</main>
<!--Main layout-->