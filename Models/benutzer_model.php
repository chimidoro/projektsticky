<?php

class login {

    public $id, $benutzername, $name, $passwort;
    

    public function construct($dbrow) {
        $this->id = $dbrow['id'];
        $this->benutzername = $dbrow['benutzername'];
        $this->name = $dbrow['name'];
        $this->passwort = $dbrow['passwort'];
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
