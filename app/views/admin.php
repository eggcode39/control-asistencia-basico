<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 08/08/2018
 * Time: 17:52
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Asistencia</title>
    <link rel="shortcut icon" href="styles/img/time.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link href="styles/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="styles/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="styles/css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

<!--Section: Modals-->
<section>
    <!-- Full Height Modal Right Success Demo-->
    <div class="modal fade right" id="fluidModalRightSuccessDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-full-height modal-right modal-notify modal-success" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Fijar Entrada</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-external-link fa-4x mb-3 animated rotateIn"></i>
                        <p>Registre la hora de asistencia de los usuarios
                        </p>
                    </div>
                    <?php
                        if(count($horario) >= 1){
                            ?>
                            <div class="col-lg-12">
                                <center><label style="font-weight: bold;font-size: 25px;">Ya existe una hora fijada para el día de hoy.</label></center>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="col-lg-12">
                                <center><label>Hora de Entrada para Hoy:</label></center>
                                <center><input type="time" id="hora_ingreso"></center>
                            </div>
                            <?php
                        }
                    ?>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <?php
                    if(count($horario) >= 1){
                        ?>
                        <a role="button" class="btn btn-danger" onclick="eliminarhorario()">Eliminar
                        </a>
                        <?php
                    } else {
                        ?>
                        <a role="button" class="btn btn-success" onclick="agregarhorario()">Agregar
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Full Height Modal Right Success Demo-->

    <!-- Full Height Modal Left Info Demo-->
    <div class="modal fade left" id="fluidModalLeftInfoDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-full-height modal-left modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Ingresar Usuario</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-users fa-4x mb-3 animated rotateIn"></i>
                        <p>Agregue usuarios que pasarán por el control de asistencia
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <label>Nombres:</label><br>
                        <input type="text" id="nombre_usuario">
                    </div>
                    <div class="col-lg-12">
                        <label>Apellidos:</label><br>
                        <input type="text" id="apellido_usuario">
                    </div>
                    <div class="col-lg-12">
                        <label>DNI</label><br>
                        <input type="text" id="dni_usuario" maxlength="8">
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a role="button" class="btn btn-info" onclick="agregarusuario()">Agregar</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Full Height Modal Right Info Demo-->
</section>
<!--Section: Modals-->

<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
                <strong class="blue-text">Control Asistencia Personal</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="#" target="_blank" data-toggle="modal" data-target="#fluidModalLeftInfoDemo">Ingresar Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="#" target="_blank" data-toggle="modal" data-target="#fluidModalRightSuccessDemo">Fijar Entrada</a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a  class="nav-link border border-light rounded waves-effect" onclick="salir()">
                            <i class="fa fa-ban mr-2"></i>Salir
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="index.php" target="_blank">Inicio</a>
                    <span>/</span>
                    <span>Registro de Asistencia</span>
                </h4>

                <form class="d-flex justify-content-center">
                    <!-- Default input -->


                </form>

            </div>

        </div>
        <!-- Heading -->

        <!--Grid row-->
        <div class="row wow fadeIn">
            <!--Grid column-->
            <div class="col-md-12 mb-6">

                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">
                        <?php
                        if(count($asistentes) >= 1){
                            ?>
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                <tr>
                                    <th>#</th>
                                    <th>Nombres y Apellidos</th>
                                    <th>DNI</th>
                                    <th>Situación</th>
                                    <th>Diferencia de Tiempo</th>
                                </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                            <?php
                            $numero = 1;
                            foreach ($asistentes as $asistente){
                                $turno = '<div class="btn btn-danger">TARDANZA</div>';
                                if($asistente->asistencia_estado == 'PUNTUAL'){
                                    $turno = '<div class="btn btn-success">EN HORA</div>';
                                }
                                ?>
                                <tr>
                                    <th><?php echo $numero;?></th>
                                    <td><?php echo $asistente->trabajador_nombre . ' ' . $asistente->trabajador_apellido;?></td>
                                    <td><?php echo $asistente->trabajador_dni;?></td>
                                    <td>
                                        <?php echo $turno;?>
                                    </td>
                                    <td><?php echo $asistente->asistencia_tiempo;?></td>
                                </tr>
                                <?php
                            }
                            ?>
                                </tbody>
                            </table>
                            <?php
                            $numero++;
                        } else {
                            ?>
                            <h3>Aún no hay asistentes.</h3>
                            <?php
                        }
                        ?>


                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->
    </div>
</main>
<!--Main layout-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="styles/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="styles/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="styles/js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

    function salir() {
            var cadena = "usuario=si";
            $.ajax({
                type: "POST",
                url: "index.php?c=Admin&a=salir",
                data: cadena,
                success:function (r) {
                    if(r==1){
                        location.href = "index.php"
                    } else {
                        alert('Error de PHP');
                    }

                }
            });
    }

    function agregarusuario() {
        var nombre = $('#nombre_usuario').val();
        var apellido = $('#apellido_usuario').val();
        var dni = $('#dni_usuario').val();
        var cadena = "nombre=" + nombre +
                    "&apellido=" + apellido +
                    "&dni=" + dni;
        $.ajax({
            type: "POST",
            url: "index.php?c=Admin&a=agregarusuario",
            data: cadena,
            success:function (r) {
                if(r==1){
                    alert('Ingreso Exitoso');
                    location.href = "index.php?c=Admin&a=index"
                } else {
                    alert('Error');
                }

            }
        });
    }

    function agregarhorario() {
        var hora = $('#hora_ingreso').val();
        var cadena = "hora=" + hora;
        $.ajax({
            type: "POST",
            url: "index.php?c=Admin&a=agregarhorario",
            data: cadena,
            success:function (r) {
                if(r==1){
                    alert('Ingreso Exitoso');
                    location.href = "index.php?c=Admin&a=index"
                } else {
                    alert('Error');
                }

            }
        });
    }

    function eliminarhorario() {
        var cadena = "id=" + 1;
        $.ajax({
            type: "POST",
            url: "index.php?c=Admin&a=eliminarhorario",
            data: cadena,
            success:function (r) {
                if(r==1){
                    alert('Hora de Ingreso Borrada');
                    location.href = "index.php?c=Admin&a=index"
                } else {
                    alert('Error');
                }

            }
        });
    }
</script>

</body>

</html>
