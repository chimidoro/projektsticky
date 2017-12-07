<?php

class login {

    public $id, $benutzername, $name, $passwort;

<<<<<<< HEAD
    public function construct($dbrow) {
        $this->id = $dbrow['id'];
        $this->benutzername = $dbrow['benutzername'];
        $this->name = $dbrow['name'];
        $this->passwort = $dbrow['passwort'];
=======
    public function __construct($dbrow) {
        $this->id = dbrow['id'];
        $this->benutzername = dbrow['benutzername'];
        $this->passwort = dbrow['passwort'];
>>>>>>> 7dc2f16bc0672c370375c24f559aca57f030e394
    }

    public function getId() {
        return $this->id;
    }

    public function getBenutzername() {
        return $this->benutzername;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getpasswort() {
        return $this->passwort;
    }

}
