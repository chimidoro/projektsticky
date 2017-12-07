<?php


        if(isset($_POST["einloggen"])){// Wenn Formular abgeschickt
                if($_POST["passwort"] != "" && $_POST["name"] != ""){
                        if(exist("benutzer WHERE name = '".save($_POST["name"])."' && passwort = '".save(md5($_POST["passwort"]))."'")){
                                $select = "SELECT id FROM benutzer WHERE name = '".save($_POST["name"])."'";
                                $query = mysql_query($select);
                                while($row = mysql_fetch_object($query)){
                                        $_SESSION["acp"] = $row->id; // Loggt einen ein!
                                }

                                $eintragen = mysql_query("INSERT INTO benutzer_login (name, ip, timestamp, status) VALUES (
                                '".save(strip_tags($_POST["name"]))."',
                                '".getenv("REMOTE_ADDR")."',
                                '".time()."',
                                'erfolgreich')"); // Eintrag in Login!

                                echo "<meta http-equiv='refresh' content='0; URL=/acp/memberarea.php'>"; // Weiterleitung zur Memberarea
                        }
                        else{ // Wenn falsch eingeloggt
                                echo "<h1>Sorry</h1> <p class='fault'>Der Login schlug fehl.</p>";
                                $eintragen2 = mysql_query("INSERT INTO benutzer_login (name, ip, timestamp, status) VALUES (
                                '".save(strip_tags($_POST["name"]))."',
                                '".getenv("REMOTE_ADDR")."',
                                '".time()."',
                                'gescheitert')"); // Eintrag in Login!
                        }
                }
        }
        else{ /* Wenn noch nicht abgeschickt, dann zeige Formular*/
                echo "<h1>Login</h1>";
                echo "<form method='post'>";
                echo "<table width=90%>";
                echo "<tr>";
                echo "<td>Name:</td>";
                echo "<td><input type='text' name='name'></td>";
                echo "</tr><tr>";
                echo "<td>PW:</td>";
                echo "<td><input type='password' name='passwort'></td>";
                echo "</tr><tr>";
                echo "<td></td>";
                echo "<td><input type='submit' name='einloggen' value='Login'></td>";
                echo "</tr>";
                echo "</table>";
                echo "</form>";
        }
?>