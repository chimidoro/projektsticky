<?php

class login {

    public $id, $benutzername, $name, $passwort;

    public function __construct($dbrow) {
        $this->id = dbrow['id'];
        $this->benutzername = dbrow['benutzername'];
        $this->passwort = dbrow['passwort'];
    }

    public function getId() {
        return $this->id;
    }

    public function getBenutzername() {
        return $this->benutzername;
    }

    public function getpasswort() {
        return $this->passwort;
    }

}
