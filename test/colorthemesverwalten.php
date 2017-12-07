<?php
        include('header.php');
        include('pagetest.php');

        if(isset($_SESSION["acp"])){
                if($_REQUEST['action'] == 'deletecolorthemes'){
                        unlink("/users/shyra/www/Colorthemes/Colorthemes_".$_REQUEST["id"]."".wert("gfx WHERE id = '".save($_REQUEST["id"])."'","bild")."");
                        $delete = "DELETE FROM gfx WHERE id = '".save($_REQUEST["id"])."'";
                        $delete_go = mysql_query($delete) OR die(mysql_error());
                        echo "<p class='ok'>Colorthemes erfolgreich gelöscht.</p>";
                }
                if(isset($_REQUEST['anzahl'])){
                        $Eingabe= $_REQUEST['eingabe'];
                }
                else{
                        $Eingabe= 1;
                }

                if($_REQUEST['action'] == 'newcolorthemes'){
                        $anzahl = $_REQUEST["anzahl"];
                        $select = mysql_query("SELECT name FROM benutzer WHERE id ='".$_SESSION["acp"]."'");
                    $row = mysql_fetch_object($select);

                        for($i=1;$i<=$anzahl;$i++){
                                if(!empty($_FILES["colorthemes_".$i]["name"])){
                                        $endung = strstr($_FILES["colorthemes_".$i]["name"] , ".");

                                        $eintrag = "INSERT INTO gfx (typ, timestamp, webby, bild, serie) VALUES (
                                        'Colorthemes',
                                        '".time()."',
                                        '".save($row->name)."',
                                        '".save($endung)."',
                                        '".save($_POST["series_".$i])."'
                                        )";
                                        $eintragen = mysql_query($eintrag) OR die(mysql_error());
                                        $id = mysql_insert_id();
                                        move_uploaded_file($_FILES["colorthemes_".$i]["tmp_name"],"/users/shyra/www/Colorthemes/Colorthemes_".$id.$endung);
                                }
                                else{
                                        echo "<p class='fault'>Du hast eine Colorthemes vergessen!</p>";
                                }
                        }
                        echo "<p class='ok'>Erfolgreich eingetragen!</p>";
        }

                /* ANZAHL HOCHLADEN */
                echo "<h1>Neue Colorthemes hinzufügen</h1>";
                echo "Hier kannst du die bisherigen Colorthemes bearbeiten sowie löschen oder neue hinzufügen! <br>
                Zu jedem Colorthemes wird eine Farbe verlangt!<br><BR>";

                if($Eingabe <=0){
                        $Eingabe=1;
                }
                echo "Wieviele Colorthemes möchtest du hochladen?</br>";
                echo "<form action='colorthemessverwalten.php' method='post'>";
                        echo "<input type='text' name='eingabe' value='".$Eingabe."'>
                        <input type='submit' name='anzahl' value='Go' >";
                echo "</form>";
                echo "<br /><br />";

                /* HOCHLADEN */
                echo "<form action='colorthemesverwalten.php?action=newcolorthemes' method='post' enctype='multipart/form-data'>";
                echo "<table>";

                for($i=1; $i<=$Eingabe; $i++){
                        echo "<tr>";
                                echo "<td>Farbe (zbs. rot, blau etc.) <b>".$i."</b>:</td>";
                                echo "<td><input type='text' name='series_".$i."' size='20'></td>";
                        echo "</tr>";
                        echo "<tr>";
                                echo "<td>Colorthemes <b>".$i."</b>:</td>";
                                echo "<td><input type='file' name='colorthemes_".$i."' size='20'></td>";
                        echo "</tr>";
                        echo "<tr height='10px'></tr>";

                }
            echo "<tr>";
            echo "<input type='hidden' name='anzahl' value='";
                if(isset($_REQUEST["eingabe"])){
                        echo $_REQUEST["eingabe"];
                }
                else{
                        echo "1";
                }
                echo "'>";
                echo "<td></td>";
                echo "<td><input type='submit' value='Hochladen!' name='hochladen'></td>";
           echo "</tr>";
                echo "</table>";
                echo "</form>";
                echo "<br><br>";

                echo "<h1>Colorthemes verwalten</h1>";
                /* SEITEN FUNKTION */
                 $itemsPerPage = 20;
                 $start = ($_GET['go']-1) * $itemsPerPage;
            pagemittyp($itemsPerPage, "gfx", "Colorthemes");

                echo "<table>";
                $i = 0;
                if($start >=0){
                $abfrage = "SELECT * FROM gfx WHERE typ = 'Colorthemes' ORDER BY id DESC LIMIT ".$start.", ".$itemsPerPage;
            }
            else{
                        $abfrage = "SELECT * FROM gfx WHERE typ = 'Colorthemes' ORDER BY id DESC LIMIT 0, 10";
                }
                $ergebnis = mysql_query($abfrage);
                while($row = mysql_fetch_object($ergebnis)){
                        if($i != 0 && $i%4 == 0){
                                echo"</tr><tr>";
                        }
                        echo "<td align='center'>";
                                echo "<div class='gfx'>";
                                echo "<img src='/Colorthemes/Colorthemes_".$row->id.$row->bild."'><br>";
                                echo "By ".$row->webby." <br />";
                                echo "<a href='colorthemesverwalten.php?action=deleteiconbase&id=".$row->id."'>
                                <img src='webicons/delete.png' border='0'></a> ";
                                echo "<a href='colorthemesverwalten_edit.php?id=".$row->id."'><img src='webicons/edit.png' border='0'></a>";
                                echo "</div>";
                        echo "</td>";
                        $i++;
            }

                echo "</table>";
    }
        else{
         echo "<p class='fault'>Kein Zutritt!</p>";
    }
    include('footer.php');
?>