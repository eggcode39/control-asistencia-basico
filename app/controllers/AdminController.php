<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 08/08/2018
 * Time: 16:52
 */

Use Exception;
class AdminController{
    public function __construct(){

    }

    public function index(){
        require _VIEW_PATH_ . 'admin.php';
    }
}