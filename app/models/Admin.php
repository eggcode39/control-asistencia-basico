<?php
use Exception;
require_once 'core/Database.php';

class Admin
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function salir(){
        $var = 1;
        unset($_SESSION['id']);
        return $var;
    }

    public function agregarusuario($model){
        $return = 2;
        try{
            $sql = 'insert into trabajador(
                    trabajador_nombre, trabajador_apellido, trabajador_dni
                    ) values(?,?,?)';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([
                $model->nombre,
                $model->apellido,
                $model->dni
            ]);
            $return = 1;
        } catch (Exception $e){

        }
        return $return;
    }

    public function agregarhorario($hora){
        $return = 2;
        date_default_timezone_set('America/Lima');
        $fecha = date("Y") . '-' . date("m") . '-' . date('d');
        try{
            $sql = 'insert into horario(
                    horario_fecha, horario_horaentrada
                    ) values(?,?)';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([
                $fecha,
                $hora
            ]);
            $return = 1;
        } catch (Exception $e){

        }
        return $return;
    }

    public function eliminarhorario(){
        $return = 2;
        $fecha = date("Y") . '-' . date("m") . '-' . date('d');
        try{
            $sql = 'delete from horario where horario_fecha = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$fecha]);
            $return = 1;
        } catch (Exception $e){

        }
        return $return;
    }


    public function listarasistencia(){
        $result = [];
        date_default_timezone_set('America/Lima');
        $fecha = date("Y") . '-' . date("m") . '-' . date('d');

        try {
            $stm = $this->pdo->prepare('Select t.trabajador_nombre, t.trabajador_apellido, t.trabajador_id, a.asistencia_estado, a.asistecia_tiempo from asistencia a inner join trabajador t on a.trabajador_id = t.trabajador_id inner join horario h on a.horario_id = h.horario_id where h.horario_fecha = ?');
            $stm->execute([$fecha]);

            $result = $stm->fetchAll();
        } catch (Exception $e){

        }

        return $result;

    }

    public function verificarhorario(){
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