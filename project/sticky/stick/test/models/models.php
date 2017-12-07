<?php
include('../db.php');
include('../funktionen.php');
require_once('models/models.php');

class Model {
    
    public function getlogin(){
            if(isset($_POST["einloggen"])){             // Wenn das Formular abgeschickt wird mit name = einloggen
  // erfolgt erstmals eine Zwischenspeicherung der eingegebenen Variablen
    $password = $_POST["passwort"];     
    $benutzern = $_POST["benutzername"]; 
    $dbpass = mysql_query("SELECT passwort FROM benutzer WHERE benutzername = '" . $benutzern . "' "); // Das PW vom benutzername wird aus der DB geholt
    $row = mysql_fetch_array($dbpass);                                                                  
    $pw = $row['passwort'];                                                                                     
    $pass_corr = password_verify($password, $pw);   // Das geholte password wird mit dem gesendeten Passwort mittels password_verify abgeglichen
                                                    // password_verify verifiziert das gehashte Passwort aus der DB
                                                    // Rückegabewert ist entweder true oder false
// Wenn die Eingabefelder nicht leer sind 
    if ($password != "" && $benutzern != "") {     
        // Exist: Gibt ein True wieder, wenn der Benutzer existiert
        // save = umfasst die Funktion myswl_real_escape_String() zur Vorbeugung einer SQL-Injection        
        // Und der Benutzername = verschickter Benutzername && verifizierte Passwort = True   
        if (exist("benutzer WHERE benutzername = '" . save($benutzern) . "'") && $pass_corr == TRUE) {
            $select = "SELECT id FROM benutzer WHERE benutzername = '" . save($benutzern) . "'";
            $query = mysql_query($select);
            while ($row = mysql_fetch_object($query)) {
                $_SESSION["acp"] = $row->id; // Loggt einen ein!
            }
            return'login'; // Weiterleitung zur Verwaltung                              
        } else {
            // Wenn falsch eingeloggt
            return'fail';
        }        
    }
    }
    }
}
?>