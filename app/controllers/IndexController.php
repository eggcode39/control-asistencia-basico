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
        foreach ($horarios as $horario){
            $horaoficial = $horario->horario_horaentrada;
        }
        require _VIEW_PATH_ . 'index.php';
    }

    public function loguearse(){
        $this->index->loguearse();
        echo 1;
    }
}