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
}