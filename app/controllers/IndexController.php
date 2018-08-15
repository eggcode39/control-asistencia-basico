<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 08/08/2018
 * Time: 16:51
 */
require 'app/models/Index.php';
Use Exception;
class IndexController{
    private $index;
    public function __construct(){
        $this->index = new Index();
    }

    public function index(){
        $horarios = $this->index->cargarhorario();
        $horaoficial = '';
        $horaid = '';
        foreach ($horarios as $horario){
            $horaoficial = $horario->horario_horaentrada;
            $horaid = $horario->horario_id;
        }
        require _VIEW_PATH_ . 'index.php';
    }

    public function loguearse(){
        $this->index->loguearse();
        echo 1;
    }

    public function registrarasistencia(){
        $model = new Index();
        $trabajadordni = $_POST['trabajador'];
        $existencia = $this->index->verificardni($trabajadordni);

        if(count($existencia) >= 1){
            foreach ($existencia as $exis){
                $idtrabajador = $exis->trabajador_id;
            }
            $asistenciaregistrada = $this->index->verificarregistro($idtrabajador);
            if(count($asistenciaregistrada) >= 1){
                echo 3;
            } else {
                $model->horario = $_POST['horaid'];
                $model->trabajador = $idtrabajador;
                $model->asistencia = 'PUNTUAL';
                $model->tiempo = $_POST['tiempo'];
                $this->index->registrarasistencia($model);
                echo 1;
            }
        } else{
            echo 2;
        }
    }
}