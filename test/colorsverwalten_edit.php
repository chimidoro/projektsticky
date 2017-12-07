<?php
        include("header.php");
        if(isset($_SESSION["acp"])){

            if($_REQUEST["action"] == "edit"){
                        if(is_numeric($_REQUEST["id"])){
                                if(!empty($_POST["serie"])){
                                        $update = "UPDATE gfx SET
                                        serie = '".save($_POST["series"])."',
                                        WHERE id = '".save($_REQUEST["id"])."'";
                                        $update_a = mysql_query($update) OR die(mysql_error());
                                        echo "<p class='ok'>Color erfolgreich editiert.<br></p>";
                                        echo '<meta http-equiv="refresh" content="1; url=colorsverwalten.php">';
                                }
                                else{
                                        echo "<p class='fault'>Ein Feld wurde nicht ausgefüllt!<br></p>";
                                }
                        }
                }

                echo "<h1>Iconbase bearbeiten</h1>";

                $abfrage_series = "SELECT serie, COUNT(id) as anzahl FROM gfx WHERE typ = 'colors' GROUP BY serie";
        $ergebnis_series = mysql_query($abfrage_series);
        while($row_series = mysql_fetch_object($ergebnis_series)){
                $serie .= "<option value='".$row_series->serie."'";
                if(wert("gfx WHERE id = '".save($_REQUEST["id"])."'", "serie") == $row_series->serie){
                                $serie .= " selected";
                        }
                        $serie .= ">".$row_series->serie."</option>";


        }

        $abfrage_colors = "SELECT id, bild FROM gfx WHERE id ='".$_REQUEST["id"]."'";
        $ergebnis_colors = mysql_query($abfrage_colors);
        $row_colors = mysql_fetch_object($ergebnis_colors);
        echo "Du bearbeitest folgenden Colors:<br>";
                echo "<img src='colors/".$row_colors->id.$row_colors->bild."'><br><br>";

                echo "<form action='colorsverwalten_edit.php?action=edit&id=".$_REQUEST["id"]."' method='POST'>";
                        echo "<table>";
                                echo "<tr>";
                                        echo "<td>Series:</td>";
                                        echo "<td><select name='serie'>".$serie."</select></td>";
                                echo "</tr>";
                                echo "<tr>";
                                        echo "<td colspan='2'><input type='submit' value='EDIT!' /></td>";
                                echo "</tr>";
                        echo "</table>";
                echo "</form>";
        }
        else{
             echo "<p class='fault'>Kein Zutritt!</p>";
        }
        include("footer.php");
?>