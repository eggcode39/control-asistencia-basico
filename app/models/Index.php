<?php
use Exception;
require_once 'core/Database.php';

class Index
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function loguearse(){
        $var = 1;
        $_SESSION['id'] = 1;
        return $var;
    }

    public function cargarhorario(){
        $result = [];
        date_default_timezone_set('America/Lima');
        $fecha = date("Y") . '-' . date("m") . '-' . date('d');

        try {
            $stm = $this->pdo->prepare('Select * from horario where horario_fecha = ?');
            $stm->execute([$fecha]);

            $result = $stm->fetchAll();
        } catch (Exception $e){

        }

        return $result;

    }
}