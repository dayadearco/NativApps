<!-- Codigo de conexion al archivo db.php -->
<?php
include("assets/php/db.php");
?>
<?php
require_once("assets/php/val_session_admin.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear nuevo Equipo</title>

    <!-- Bootstrap validator -->
    <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />

    <!-- Estilos CSS Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- Alertify -->
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
</head>

<body>
    <!-- Contenedor principal -->
    <div id="wrapper">
        <?php include("assets/modelos/navbar_header_admin_vp.php"); ?>

        <!-- Contenido de la pagina, lado derecho ancho -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Agregar nuevo equipo</h2>
                    </div>
                </div>
                <hr />
                <!-- Formulario de creacion de equipo -->
                <form id="formregistrarequipo" class="form-nuevo-cliente" action="assets/php/guardarequipo.php"
                    method="POST">


                    <div class="form-row">
                        <!-- serial -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-nombre">Serial</label>
                            <input type="text" class="form-control" id="serial" name="serial" placeholder="112223344556"
                                require>
                            <!-- En este div se mostrará la alerta según sea el caso. -->
                            <div id="result-serial"></div>
                        </div>
                        <!-- marca -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-nombre">Marca</label>
                            <select class="form-control" name="marca" id="marca" require>
                                <option selected disabled value=""> Seleccionar</option>
                                <option value="HP">HP</option>
                                <option value="ASUS">ASUS</option>
                                <option value="LENOVO">LENOVO</option>
                                <option value="APPLE">APPLE</option>
                            </select>
                        </div>
                        <!-- nombre -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-nombre">Nombre del dispositivo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="DESKTOP-XXXCCXZXC" require>
                        </div>
                        <!-- tIPO EQUIPO -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-nombre">Tipo equipo</label>
                            <select class="form-control" name="tipo_equipo" id="tipo_equipo" require>
                                <option selected disabled value=""> Seleccionar</option>
                                <option value="All in one">All in one</option>
                                <option value="Portatil">Portatil</option>
                                <option value="PC de mesa">PC de mesa</option>
                                <option value="dispositivo movil">Dispositivo movil</option>
                            </select>
                        </div>
                        <!-- Modelo equipo -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-apellido">Modelo equipo</label>
                            <input type="text" class="form-control" id="modelo_equipo" name="modelo_equipo"
                                placeholder="123123XXXXXX" require>
                        </div>
                        <!-- procesador -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-apellido">Procesador</label>
                            <input type="text" class="form-control" id="procesador" name="procesador"
                                placeholder="Intel/AMD">
                        </div>
                        <!-- ram -->

                        <div class="form-group col-md-6">
                            <label for="registrar-email">Ram</label>
                            <input type="text" class="form-control" id="ram" name="ram" placeholder="Xgb ram tipo X"
                                require>
                        </div>
                        <!-- discoduro -->

                        <div class="form-group col-md-6">
                            <label for="registrar-contrasena">Disco_duro</label>
                            <input type="text" class="form-control" id="disco_duro" name="disco_duro"
                                placeholder="marca del disco duro  " require>
                        </div>
                        <!-- sistema operativo -->

                        <div class="form-group col-md-6">
                            <label for="registrar-contrasena">Sistema operativo</label>
                            <select class="form-control" name="sistema_operativo" id="sistema_operativo" require>
                                <option selected disabled value=""> Seleccionar</option>
                                <option value="windows 10">Windows 10</option>
                                <option value="ubuntu">Ubuntu</option>
                                <option value="Mac/Os">Mac/Os</option>
                                <option value="Android">Android</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="registrar-contrasena">Estado del equipo</label>
                            <select class="form-control" name="estado" id="estado">
                                <option selected disabled value=""> Seleccionar</option>
                                <option value="Funcional">Funcional</option>
                                <option value="regular">Regular</option>
                                <option value="Mantenimiento">Mantenimiento</option>
                                <option value="fuera de servicio">Fuera de servicio</option>
                            </select>
                        </div>


                    </div>

                    <button type="submit" class="btn btn-success ajustar-boton" name="registrar" value="registrar"
                        id="registrar">Registrar</button>
                </form>

            </div>

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->

    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Ajax Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <!-- CDN Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Bootstrap validator -->
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

    <script src="assets/js/validaciones.js"></script>

    <!-- Ajax valdiacion en BD en vivo -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#serial').on('blur', function () {
                $('#result-serial').html('<img src="assets/img/loader.gif" />').fadeOut(1000);

                var serial = $(this).val();
                var dataString = 'serial=' + serial;
                $.ajax({
                    type: "POST",
                    url: "assets/php/checkearDisponibilidad.php",
                    data: dataString,
                    success: function (data) {
                        $('#result-serial').fadeIn(1000).html(data);
                    }
                });
            });
        });
    </script>

</body>

</html>