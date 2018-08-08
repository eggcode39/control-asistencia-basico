<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 08/08/2018
 * Time: 16:27
 */

// Errores de PHP a Try/Catch
function exception_error_handler($severidad, $mensaje, $fichero, $línea) {
    if (!(error_reporting() & $severidad)) {
        // Este código de error no está incluido en error_reporting
        return;
    }
    //throw new ErrorException($mensaje, 0, $severidad, $fichero, $línea);
}

set_error_handler("exception_error_handler");
session_start();

// path
define('_VIEW_PATH_', 'app/views/');

require 'autoload.php';

if(isset($_SESSION['id'])){
    $a = 'index';
    if(isset($_GET['a'])){
        $a = $_GET['a'];
    }

    $c = sprintf(
        '%sController',
        'Admin'
    );

    $c = trim(ucfirst($c));
    $a = trim(strtolower($a));
    $controller = new $c;
    $controller->$a();
} else {
    $a = 'index';
    if(isset($_GET['a'])){
        if($_GET['a'] == "loguearse" || $_GET['a'] == "validar"){
            $a = $_GET['a'];
        }
    }

    $c = sprintf(
        '%sController',
        'Index'
    );

    $c = trim(ucfirst($c));
    $a = trim(strtolower($a));
    $controller = new $c;
    $controller->$a();
}
