<?php
include("header.php");
        if(isset($_SESSION["acp"])){
           
echo"<h4>Verwaltungsbereich</h4>";
echo"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sceso";
echo"Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sceso";

echo"<br><br>";

echo " <div class='Verwaltungsbereich'> ";
echo "    <ul>";
echo "        <li class='Thema_uebersicht'><a href='/blubb'>Themen <br>Übersicht<span></span></a></li>";
echo "        <li class='thema_hochladen'><a href='/blubb'>Thema <br>hochladen<span></span></a></li>";
echo "        <li class='inf_verwalten'><a href='/blubb'>Informationen <br>verwalten<span></span></a></li>";
echo "        <li class='report_erstellen'><a href='/blubb'>Report <br>erstellen<span></span></a></li>";
echo "    </ul>";
echo "</div>";
   }
   
else {
echo"Fehler";
    }

include("navi.php");
include("footer.php");
?>