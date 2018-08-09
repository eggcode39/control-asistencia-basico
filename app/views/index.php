<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 08/08/2018
 * Time: 17:51
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Control De Asistencia</title>
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

    <!--Modal Form Login with Avatar Demo-->
    <div class="modal fade" id="modalLoginAvatarDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header">
                    <img src="styles/img/user.jpg" class="rounded-circle img-responsive" alt="Avatar photo">
                </div>
                <!--Body-->
                <div class="modal-body text-center mb-1">

                    <h5 class="mt-1 mb-2">Inicio de Sesión</h5>

                    <div class="md-form ml-0 mr-0">
                        <input type="text" type="text" id="usuario" class="form-control ml-0">
                        <label for="form1"  class="ml-0">Usuario</label>
                    </div>
                    <div class="md-form ml-0 mr-0">
                        <input type="password" type="text" id="contrasenha" class="form-control ml-0">
                        <label for="form1"  class="ml-0">Contraseña</label>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-cyan" onclick="iniciarsesion()">Ingresar<i class="fa fa-sign-in ml-1"></i></button>
                    </div>
                </div>

            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal Form Login with Avatar Demo-->
</section>
<!--Section: Modals-->

<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="#" target="_blank">
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

                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="#" class="nav-link border border-light rounded waves-effect" data-toggle="modal" data-target="#modalLoginAvatarDemo">
                            <i class="fa fa-circle-o-notch mr-2"></i>Ingresar
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
        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header">
                        <center>Hora y Fecha Actual</center>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12" style="border-color: #f01ed0;border-top: solid;border-bottom: solid;border-left;border-left: solid; border-right;border-right: solid;">
                                <center><label id="hora" style="font-size: 100px;">00:00:10</label></center>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <center><label id="fecha" style="font-size: 60px;">gg</label></center>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card">


                    <!-- Card header -->
                    <div class="card-header">
                        <center><label>Registro de Entrada</label></center>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <div class="text-center mb-5" style="margin-bottom: 0rem !important;">
                            <p class="lead" style="font-size: 40px;">Ingrese DNI:</p>
                        </div>

                        <div class="row">
                            <!--Third column-->
                            <div class="col-md-12">
                                <center><input type="text" id="dni" style="height: 60px;width: 315px;font-size: 40px;text-align: center;border: solid turquoise;display: table-cell;vertical-align: middle;"><button class="btn btn-default" style="font-size: 22px;font-weight: bold;display: table-cell;vertical-align: middle;"
                                                                                                                                                                                                                     onclick="borrar()"><i class="fa fa-trash-o fa-lg"></i></button></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-2">
                                <center><button class="btn btn-default" style="font-size: 25px;font-weight: bold;" onclick="escribir(1)">1</button></center>
                                <center><button class="btn btn-default" style="font-size: 25px;font-weight: bold;" onclick="escribir(4)">4</button></center>
                                <center><button class="btn btn-default" style="font-size: 25px;font-weight: bold;" onclick="escribir(7)">7</button></center>
                            </div>
                            <div class="col-md-2">
                                <center><button class="btn btn-default" style="font-size: 25px;font-weight: bold;" onclick="escribir(2)">2</button></center>
                                <center><button class="btn btn-default" style="font-size: 25px;font-weight: bold;" onclick="escribir(5)">5</button></center>
                                <center><button class="btn btn-default" style="font-size: 25px;font-weight: bold;" onclick="escribir(8)">8</button></center>
                            </div>
                            <div class="col-md-2">
                                <center><button class="btn btn-default" style="font-size: 25px;font-weight: bold;" onclick="escribir(3)">3</button></center>
                                <center><button class="btn btn-default" style="font-size: 25px;font-weight: bold;" onclick="escribir(6)">6</button></center>
                                <center><button class="btn btn-default" style="font-size: 25px;font-weight: bold;" onclick="escribir(9)">9</button></center>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <center><button class="btn btn-default" style="font-size: 25px;font-weight: bold;">0</button></center>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <center><button class="btn btn-success">Registrar Entrada</button></center>
                            </div>
                        </div>

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

<!--Footer-->
<footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn" style="margin-top: 0rem !important;">

    <hr class="my-4">

    <!--Copyright-->
    <div class="footer-copyright py-3">

    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

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
</script>

<script type="text/javascript">
    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
    var f = new Date();
    $('#fecha').text(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
    console.log(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());


    function cargarhora() {
        var fecha = new Date();
        var horas = (fecha.getHours() < 10 ? '0' : '') + fecha.getHours();
        var minutos = (fecha.getMinutes() < 10 ? '0' : '') + fecha.getMinutes();
        var segundos = (fecha.getSeconds() < 10 ? '0' : '') + fecha.getSeconds();

        $('#hora').text(horas + ":" + minutos + ":" + segundos);
        setTimeout("cargarhora()", 1000);
    }
    cargarhora();

    function escribir(numero) {
        texto = $('#dni').val();
        $('#dni').val('' + texto + numero);
    }

    function borrar() {
        $('#dni').val('');
    }

    function iniciarsesion() {
        var user = "gabriel";
        var password = "123456";

        var usuario = $('#usuario').val();
        var contrasenha = $('#contrasenha').val();

        if(usuario == user && password == contrasenha){
            alert('Inicio de Sesión Correcto');
            var cadena = "usuario=si";
            $.ajax({
                type: "POST",
                url: "index.php?c=Index&a=loguearse",
                data: cadena,
                success:function (r) {
                    if(r==1){
                        location.href = "index.php?c=Admin&a=index"
                    } else {
                        alert('Error de PHP');
                    }

                }
            });
        } else {
            alert('Datos incorrectos');
        }
    }
</script>

</body>

</html>
