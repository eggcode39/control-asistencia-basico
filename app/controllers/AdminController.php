<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 08/08/2018
 * Time: 16:52
 */
require 'app/models/Admin.php';
Use Exception;
class AdminController{
    private $admin;
    public function __construct(){
        $this->admin = new Admin();
    }

    public function index(){
        $asistentes = $this->admin->listarasistencia();
        $horario = $this->admin->verificarhorario();
        require _VIEW_PATH_ . 'admin.php';
    }

    public function salir(){
        $this->admin->salir();
        echo 1;
    }

    public function agregarusuario(){
        $model = new Admin();
        $model->nombre = $_POST['nombre'];
        $model->apellido = $_POST['apellido'];
        $model->dni = $_POST['dni'];

        $result = $this->admin->agregarusuario($model);
        echo $result;
    }

    public function agregarhorario(){
        $hora = $_POST['hora'];
        $result = $this->admin->agregarhorario($hora);
        echo $result;
    }

    public function eliminarhorario(){
        $id = 1;
        $result = $this->admin->eliminarhorario();
        echo $result;
    }
}