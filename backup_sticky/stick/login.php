
<?php
include("header.php");
include("db.php");
include("funktionen.php");

echo"<h4 class='card-title'>Login-Bereich</h4>";
echo"<div class='logform'>";
echo"<form method='post'>";
echo"<table style='width: 90%; margin: 5%;'>";
echo"<tr>";
echo"<td><b>Benutzername:</b></td>";
echo"<td><input type='text' class='form-control' name='benutzername'></td>";
echo"</tr><tr>";
echo"<td><b>Passwort:</b></td>";
echo"<td><input type='password' class='form-control' name='passwort'></td>";
echo"</tr><tr>";
echo"<td></td>";
echo"<td><input type='submit' class='btn btn-primary' name='einloggen' value='Login'></td>";
echo"</tr>";
echo"</table>";
echo"</form>";
echo"</div>";

if (isset($_POST["einloggen"])) {       // Wenn das Formular abgeschickt wird 
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
        if (exist("benutzer WHERE benutzername = '".save($benutzern)."'") && $pass_corr == TRUE) {
            $select = "SELECT id FROM benutzer WHERE benutzername = '".save($benutzern)."'";
            $query = mysql_query($select);
            while ($row = mysql_fetch_object($query)) {
                $_SESSION["acp"] = $row->id; // Die Session Variable: ID wird über mehrere Seiten hin gepspeichert
            }
            echo "<div class='alert alert-success' style='margin-top: 3%; width: 45%; text-align: center; left: 17%;' role='alert'><b>Anmeldung war erfolreich!</b><br>Die Weiterleitung erfolgt in wenigen Sekunden. <br> <img src='img/ajax-loader.gif'></div>"; // Weiterleitung zur Verwaltun
            echo "<meta http-equiv='refresh' content='30; URL=/stick/verwaltung.php'>"; // Weiterleitung zur Verwaltung   
            echo "$row->id";   
        } 
        else {
            // Wenn falsch eingeloggt
            echo "<div class='alert alert-danger' style='margin-top: 3%; width: 45%; text-align: center; left: 17%;' role='alert'><b>Achtung!</b><br>Das Passwort und der Benutzername stimmen nicht überein.</div>";
        }        
    }
    else{
        echo "<div class='alert alert-danger' style='margin-top: 2%; width: 45%; text-align: center; left: 17%;' role='alert'><b>Achtung!</b><br>Bitte fülle alle Eingabefelder aus!</div>";
    }
} 

include ('navi.php');
include("footer.php");
?>