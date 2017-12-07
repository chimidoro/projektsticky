<?php
include("db.php");
	if(isset($_POST["eintragen"])) { // Wenn Formular abgeschickt wurde....
            $password1 = $_POST["passwort1"];
            $hash = password_hash($password1,PASSWORD_BCRYPT);
		if(!empty($_POST["benutzername"]) && !empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["passwort1"]) && $_POST["passwort1"] == $_POST["passwort2"]) {
			if(preg_match("/^[A-Za-z0-9 ]+$/", $_POST["benutzername"])){
				if(empty($_POST["email"]) 
				OR (!empty($_POST["email"]) AND preg_match("/^[_a-z0-9-.]*@[_a-z0-9-.]*\.[a-z]{2,4}$/i", $_POST["email"]))
                                OR (!empty($_POST["name"]) AND preg_match("/^[A-Za-z0-9 ]+$/", $_POST["name"])) ){
					$eintragen = mysql_query("INSERT INTO benutzer (benutzername, name, passwort, email) VALUES (
                                        '".$_POST["benutzername"]."',
					'".$_POST["name"]."',
					'$hash',
					'".$_REQUEST["email"]."'
					)");
					$_SESSION["acp"] = mysql_insert_id();// Loggt einen ein!
					echo "<p class='ok'>Gratuliere! Du bist jetzt registriert und eingeloggt.<br> <a href=memberarea.php>Weiter zur Memberarea</a></p>";
				}
				else{
					echo "<p class='fault'>Die Email-Adresse ist ung�ltig!</p>";
				}
			}
			else{
				echo "<p class='fault'>Der Name ist ung�ltig! Bitte nur Buchstaben und Ziffern verwenden</p>";
			}
		}
		else{ // Wenn nicht alle Felder ausgef�llt
			echo "<p class='fault'>Bitte alle Felder ausf�llen!</p>";
		}
	}
	else { // Wenn nicht abgeschickt, dann zeige Formular
		echo "<h1>Registration</h1>";
		echo "<form action='registrierung.php' method='post'>";
			echo "<table>";
				echo "<tr>";
					echo "<td><b>Benutzername:</b></td>";
					echo "<td><input type='text' name='benutzername'></td>";
				echo "</tr>";
                                echo "<tr>";
					echo "<td><b>Name:</b></td>";
					echo "<td><input type='text' name='name'></td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td><b>E-Mail:</b></td>";
					echo "<td><input type='text' name='email'></td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td><b>Passwort:</b></td>";
					echo "<td><input type='password' name='passwort1'></td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td><b>Passwort Wiederholung:</b></td>";
					echo "<td><input type='password' name='passwort2'></td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td></td>";
					echo "<td><input type='submit' value='Registrieren' name='eintragen'></td>";
				echo "</tr>";
			echo "</table>";
		echo "</form>";
	}

?>