<?php
    include("header.php");
    include("pagetest.php");

        echo "<h1>Colorthemes ";
        if(isset($_REQUEST["webby"])){
                        echo "- ".$_REQUEST["webby"];
        }
        if(isset($_REQUEST["serie"])){
                echo "- ".$_REQUEST["serie"];
        }

        if(isset($_REQUEST["farbe"])){
                echo "- ".$_REQUEST["farbe"];
        }
        echo "</h1>";
        $abfrage_farbe = "SELECT farbe, COUNT(id) as anzahl FROM gfx WHERE typ = 'colors' GROUP BY farbe";
        $ergebnis_farbe = mysql_query($abfrage_farbe);
        while($row_farbe = mysql_fetch_object($ergebnis_farbe)){
                if($_REQUEST['farbe'] == $row_farbe->farbe){
                         $farbe .= "<option value='".$row_farbe->farbe."' selected>".$row_farbe->farbe."
                                [".$row_farbe->anzahl."]</option>";
                        }
            else{
                                $farbe .= "<option value='".$row_farbe->farbe."'>".$row_farbe->farbe." [".$row_farbe->anzahl."]</option>";
                        }
        }
        $abfrage_webby = "SELECT webby, COUNT(id) as anzahl FROM gfx WHERE typ = 'colors' GROUP BY webby";
        $ergebnis_webby = mysql_query($abfrage_webby);
        while($row_webby = mysql_fetch_object($ergebnis_webby)){
            if($_REQUEST['webby'] == $row_webby->webby){
                                $webby .= "<option value='".$row_webby->webby."' selected>".$row_webby->webby."
                                [".$row_webby->anzahl."]</option>";
                        }
                        else{
                    $webby .= "<option value='".$row_webby->webby."'>".$row_webby->webby." [".$row_webby->anzahl."]</option>";
            }
        }

                echo " <table align='center'>    ";
                   echo "   <tr>   ";
                   echo "       <td>   ";
                    echo "         <span class='small'>Farbe</span>  ";
                     echo "     </td>   ";
                      echo "    <td>   ";
                     echo "      <span class='small'>Mitglied</span>";
                     echo "     </td> ";

                    echo "  </tr>  ";
                   echo "   <tr>  ";
                      echo "    <td>";
                             echo "<div class='auswahl'><p align='center'>";

                                echo "<a href='/colorthemes.php?farbe=bunt' class=\"hintanchor\" onMouseover=\"showhint('Bunt', this, event, '22px')\"><img src='data/farben/bunt.jpg'></a>";
                                echo "<a href='/colorthemes.php?farbe=schwarz' class=\"hintanchor\" onMouseover=\"showhint('Schwarz', this, event, '45px')\"><img src='data/farben/schwarz.jpg'></a>";
                                  echo "<a href='/colorthemes.php?farbe=braun' class=\"hintanchor\" onMouseover=\"showhint('Braun', this, event, '30px')\"><img src='data/farben/braun.jpg'></a>";
                                 echo "<a href='/colorthemes.php?farbe=grau' class=\"hintanchor\" onMouseover=\"showhint('Grau', this, event, '25px')\"><img src='data/farben/grau.jpg'></a>";
                                     echo "<a href='/colorthemes.php?farbe=gruen' class=\"hintanchor\" onMouseover=\"showhint('Gruen', this, event, '33px')\"><img src='data/farben/gruen.jpg'></a>";
                                       echo "<a href='/colorthemes.php?farbe=orange' class=\"hintanchor\" onMouseover=\"showhint('Orange', this, event, '38px')\"><img src='data/farben/orange.jpg'></a>";
                              echo "<a href='/colorthemes.php?farbe=gelb' class=\"hintanchor\" onMouseover=\"showhint('Gelb', this, event, '25px')\"><img src='data/farben/gelb.jpg'></a>";
                                 echo "<br>";
                                 echo "<a href='/colorthemes.php?farbe=blau' class=\"hintanchor\" onMouseover=\"showhint('Blau', this, event, '23px')\"><img src='data/farben/blau.jpg'></a>";
                                echo "<a href='/colorthemes.php?farbe=tuerkis' class=\"hintanchor\" onMouseover=\"showhint('Tuerkis', this, event, '38px')\"><img src='data/farben/hellblau.jpg'></a>";
                                 echo "<a href='/colorthemes.php?farbe=lila' class=\"hintanchor\" onMouseover=\"showhint('Lila', this, event, '20px')\"><img src='data/farben/lila.jpg'></a>";
                                echo "<a href='/colorthemes.php?farbe=rot' class=\"hintanchor\" onMouseover=\"showhint('Rot', this, event, '18px')\"><img src='data/farben/rot.jpg'></a>";
                                  echo "<a href='/colorthemes.php?farbe=rosa' class=\"hintanchor\" onMouseover=\"showhint('Rosa', this, event, '25px')\"><img src='data/farben/rosa.jpg'></a>";
                                echo "<a href='/colorthemes.php?farbe=nude' class=\"hintanchor\" onMouseover=\"showhint('Nude', this, event, '25px')\"><img src='data/farben/nude.jpg'></a>";
                                     echo "<a href='/colorthemes.php?farbe=weiss' class=\"hintanchor\" onMouseover=\"showhint('Weiss', this, event, '26px')\"><img src='data/farben/weiss.jpg'></a>";


                     echo "  </div></td></p> <td> <div class='auswahl'><p align='center'>";
                           echo "<form method='GET'>";
                                        echo "<select name='webby' onchange='javascript: submit()'>";
                                        echo "<option value=''>Alle</option>";
                                        echo $webby." </form></div></td></p> ";
                     echo " </tr> ";
                echo "  </table>";


                echo "<br>";

         /* SEITEN FUNKTIONEN */
                $itemsPerPage = 9;
                $start = ($_GET['go']-1) * $itemsPerPage;

                $zusatz = "";

                if(isset($_REQUEST["serie"]) AND $_REQUEST["serie"] != ""){
                        pagemittypundseries($itemsPerPage, "gfx", "colors", save($_REQUEST["serie"]));
                        $zusatz = "AND serie = '".save($_REQUEST["serie"])."'";
                }
               elseif(isset($_REQUEST["farbe"]) AND $_REQUEST["farbe"] != ""){
                        pagemittypundfarbe($itemsPerPage, "gfx", "colors", save($_REQUEST["farbe"]));
                        $zusatz = "AND farbe = '".save($_REQUEST["farbe"])."'";
                }
                elseif(isset($_REQUEST["webby"]) AND $_REQUEST["webby"] != ""){
                        pagemittypundwebby($itemsPerPage, "gfx", "colors", save($_REQUEST["webby"]));
                        $zusatz = "AND webby = '".save($_REQUEST["webby"])."'";
                }
                else{
                pagemittyp($itemsPerPage, "gfx", "colors");
                }
                /* SEITEN FUNKTIONEN ENDE*/


                echo "<table align='center'>";
                echo "<tr>";

                if($start >=0){
                $abfrage_icons = "SELECT * FROM gfx WHERE typ = 'colors' ".$zusatz." ORDER BY id DESC LIMIT
                        ".$start.", ".$itemsPerPage;
        }
        else{
                        $abfrage_icons = "SELECT * FROM gfx WHERE typ = 'colors' ".$zusatz." ORDER BY id DESC LIMIT
                        0, ".$itemsPerPage;
                }

        $i = 0;
                $ergebnis_icons = mysql_query($abfrage_icons);
        while($row_icons = mysql_fetch_object($ergebnis_icons)){
                if($i%3 == 0 && $i != 0){
                    echo "</tr><tr>";
                }
                $i++;

                echo "<td>";
                     echo "<div class='gfx24'>";
                         echo "<div class='colorthemesborder'>";
                                        echo "<div id='random2'><img src='/Colorthemes/colorthemes_".$row_icons->id.$row_icons->bild."'></div>";
                                         echo "</div>";
                                echo "<center>by <h20>".$row_icons->webby."</h20>  | Farbe: ".$row_icons->farbe."<br></center><br></center>";

                                                 echo "</div>";
                                        }
         echo "</td>";
        echo "</tr>";
        echo "</table><br>";

        /* SEITEN FUNKTIONEN */
                $itemsPerPage = 9;
                $start = ($_GET['go']-1) * $itemsPerPage;

                $zusatz = "";

                if(isset($_REQUEST["serie"]) AND $_REQUEST["serie"] != ""){
                        pagemittypundseries($itemsPerPage, "gfx", "colors", save($_REQUEST["serie"]));
                        $zusatz = "AND serie = '".save($_REQUEST["serie"])."'";
                }
               elseif(isset($_REQUEST["farbe"]) AND $_REQUEST["farbe"] != ""){
                        pagemittypundfarbe($itemsPerPage, "gfx", "colors", save($_REQUEST["farbe"]));
                        $zusatz = "AND farbe = '".save($_REQUEST["farbe"])."'";
                }
                elseif(isset($_REQUEST["webby"]) AND $_REQUEST["webby"] != ""){
                        pagemittypundwebby($itemsPerPage, "gfx", "colors", save($_REQUEST["webby"]));
                        $zusatz = "AND webby = '".save($_REQUEST["webby"])."'";
                }
                else{
                pagemittyp($itemsPerPage, "gfx", "colors");
                }
                /* SEITEN FUNKTIONEN ENDE*/


  include("footer.php");
  ?>