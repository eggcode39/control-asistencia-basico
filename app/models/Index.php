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

    public function registrarasistencia($model){
        $result = 2;
        try {
            $sql = 'Insert into asistencia (
                    horario_id, trabajador_id, asistencia_estado,asistencia_tiempo
                    ) values (?,?,?,?)';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([
                $model->horario,
                $model->trabajador,
                $model->asistencia,
                $model->tiempo
            ]);
            $result = 1;
        } catch (Exception $e){

        }
        return $result;
    }

    public function verificardni($dni){
        $result = [];
        try {
            $stm = $this->pdo->prepare('Select * from trabajador where trabajador_dni = ?');
            $stm->execute([$dni]);
            $result = $stm->fetchAll();
        } catch (Exception $e){

        }
        return $result;
    }

    public function verificarregistro($id){
        $result = [];
        date_default_timezone_set('America/Lima');
        $fecha = date("Y") . '-' . date("m") . '-' . date('d');
        try {
            $stm = $this->pdo->prepare('Select * from asistencia a inner join horario h on a.horario_id = h.horario_id where a.trabajador_id = ? and h.horario_fecha = ?');
            $stm->execute([$id,$fecha]);
            $result = $stm->fetchAll();
        } catch (Exception $e){

        }
        return $result;
    }
}