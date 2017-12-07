<?php
include('db.php');
include('funktionen.php');
    require_once ('models/models.php');
    
   class Controller{
       public $model;
       
       public function __construct(){
           $this->models = new Model();
       }
       public function invoke(){
           $rslt = $this->models->getlogin();
                if($rslt=='login'){
                    include '..views/afterlogin.php';
                }
                else{
                    include '..views/login.php';
                }
       }
}

?>