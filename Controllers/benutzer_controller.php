<?php
reqiure_once('login_Model.php');


function login($username, $password) { // Login
      
    if (isset($_POST["einloggen"])) {
       $benutzer_login =  new login();
    }
    else {
        echo "nö"
}
    
}