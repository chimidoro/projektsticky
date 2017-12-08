<?php

include("header.php");
include("db.php");
include("funktionen.php");

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
        if (exist("benutzer WHERE benutzername = '" . save($benutzern) . "'") && $pass_corr == TRUE) {
            $select = "SELECT id FROM benutzer WHERE benutzername = '" . save($benutzern) . "'";
            $query = mysql_query($select);
            while ($row = mysql_fetch_object($query)) {
                $_SESSION["acp"] = $row->id; // Loggt einen ein!
            }
            echo "<meta http-equiv='refresh' content='0; URL=/stick/verwaltung.php'>"; // Weiterleitung zur Verwaltung                              
        } else {
            // Wenn falsch eingeloggt
            echo "<p class='fault'>Das Passwort und der Benutzername stimmen nicht überein.</p>";
        }        
    }
    else{
        echo "Bitte fülle alle Eingabefelder aus.";
    }
} 
?>

<h4 class='card-title'>Login-Bereich</h4>
<div class='logform'>
<form method='post'>
<table style='width: 90%; margin: 5%;'>
<tr>
<td><b>Benutzername:</b></td>
<td><input type='text' class='form-control' name='benutzername'></td>
</tr><tr>
<td><b>Passwort:</b></td>
<td><input type='password' class='form-control' name='passwort'></td>
</tr><tr>
<td></td>
<td><input type='submit' class='btn btn-primary' name='einloggen' value='Login'></td>
</tr>
</table>
</form>
</div>

<?php
include 'navi.php';
include("footer.php");
?>