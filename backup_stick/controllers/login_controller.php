<?php

require_once('../models/login_model.php');

    class Controller {
        public $model;
        
    public function __construct(){
        $this->models = new Model();
    }
    
           public function exist($abfrage) {
        $ergebnis3 = mysql_query("SELECT id FROM " . $abfrage);
        if (mysql_fetch_object($ergebnis3)) {
            return true;
        } else {
            return false;
        }
    }

       public function save($text) {
        $textnew = mysql_real_escape_string($text);
        return $textnew;
    }

    public function invoke(){
        $rslt = $this->models->getlogin();
            if($rslt == 'geklappt'){
                include '../views/afterlogin.php';
            }
            else{
                include '../views/login_view.php';
            }
        }
        
    }
    
?>
