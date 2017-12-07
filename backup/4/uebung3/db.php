<?php
$host = "localhost"; // Adresse des Datenbankservers, meistens localhost
$user = "shyra"; // Ihr MySQL Benutzername
$pass = "shyre112"; // Ihr MySQL Passwort
$db = "shyra"; // Name der Datenbank

$link = mysql_connect($host, $user, $pass);
mysql_select_db($db, $link);
?>