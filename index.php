<?php include 'header.php'; ?>

<br>
<h1 class="card-title">Themenvergabe für Seminar und Abschlussarbeiten</h1><br>  
<h4>
    Willkommen zum Tool zur Anmeldung und Vergabe von Abschlussarbeiten.<br>
</h4>


<div class="info"> <!-- Tabelle mit Informationen und Collapsefunktion -->

    <table class="tg" style="width: 100%;  margin: 1px;">

        <th class="tg-py0s">
            <div class="accordion-group accordion-caret" data-toggle="collapse" href="#collapseOne" >
                <div class="accordion-heading">
                    <a style="color: #ffffff;" class="accordion-toggle" data-toggle="collapse" href="#collapseOne">
                        <strong>Header</strong>
                    </a>
                </div>
            </div>
        </th>
        <tr style="width: 100%;">
            <td class="tg-28r4" style="padding:0px;"> 


                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >         
                    <div class="card-body"> <h4>Testbox </h4><br>
                        <p>


                        <div id="collapseOne" class="accordion-body collapse in">           <!-- Text im collapse-->
                            <div class="accordion-inner">
                                Content
                            </div>
                        </div>



                        <button type="button"
                                onclick="document.getElementById('demo').innerHTML = Date()">
                            Click me to display Date and Time.</button>
                        <p id="demo"></p><br>


                        <i class="fas fa-spinner fa-spin"></i><br>




                        <div class="btn-group">
                            <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </div>
                        <div id="demo" class="collapse in">Some dummy text in here.</div>





                        </p>
                    </div>

                    <div class="card-body"> <h4>Vorgehensweise: Anmeldung/Bewerbung auf ein Seminar</h4><br>
                        <p>
                        <ol>
                            <li>Informieren Sie sich auf dieser Informationsseite über die verschiedenen Vergabeverfahren.</li>
                            <li>Suchen Sie auf der folgenden Seite nach den passenden Modulen/Themen.<br>
                                <a href="#">zur Themenübersicht</a></li>
                            <li>Wenn sie das passende Thema gefunden haben, klicken sie auf den grünen Button.<br>
                                Sie werden dadurch zu dem Anmeldeformular weitergeleitet</li>
                        </ol>
                        </p>
                    </div>
            </td>           
        </tr> 
    </table>
    <table class="tg" style="width: 100%;  margin: 1px;">
        <th class="tg-py0s"> 
            <a  style="color: #ffffff; " data-toggle="collapse" href="#verf" aria-expanded="true" aria-controls="verf">Informationen zu den Verfahren</a> 
        </th>
        <tr style="width: 100%;">
            <td class="tg-28r4" style="padding:0px;"> 
                <div id="verf" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">         
                    <div class="card-body"> <h4>Wie funktionieren die Verfahren?</h4><br>
                        <p>
                            Wie funktioniert shdas <b>Bewerbungsverfahren</b>?
                            Sie bewerben verbindlich sich für eine, von Ihnen, gewünschte Veranstaltung.
                            Anhand der folgend genannten Kriterien im Formular errechnet ein Algorithmus mit Hilfe eines Punktebewertungsschemas heraus, ob Sie die Bedingungen erfüllen, um
                            in die Veranstaltung zugelassen werden. Die Kriterien werden nicht gleichermaßen berechnet.
                            Die Bewerbung gilt nur innerhalb der Bewerbungsfrist.
                            Alle Anmeldungen werden zeitunabhängig innerhalb der Bewerbungsfrist gleichwertig behandelt.
                            Nach Ende der Frist bekommen sie eine Benachrichtigung in welcher Veranstaltung Sie zugeteilt wurden.
                        </p>
                        <p>
                            Wie funktioniert das <b>Windhundverfahren</b> (alternativ First Come First Serve)?
                            Die Bewerber, die sich verbindlich am schnellsten in eine Veranstaltung eintragen bekommen garantiert ihren gewünschten Platz. Interessenten einer
                            Veranstaltung sollten sich also schnellstmöglich eintragen, da sonst ihnen ein Platz entgehen würde.
                            Die Bewerbung gilt nur innerhalb der Bewerbungsfrist. Nach Ende der Frist bekommen sie eine Benachrichtigung in welcher Veranstaltung Sie zugeteilt wurden.
                        </p>
                        <p>
                            Wie funktioniert das <b>Belegungsverfahren</b>?
                            Sie wählen verbindlich im folgenden Formular drei verschiedene Themen absteigend nach ihrer gewählten Priorität aus.
                            Sie müssen in alle Themenauswahlfelder eine Priorität angeben. Die Bewerbung gilt nur innerhalb der Bewerbungsfrist. 
                            Anhand einer Algorithmik werden ihre Prioritäten berücksichtigt und das bestmögliche Optimum für alle Studenten ausgewertet. 
                            Trotzdessen ist es keine Garantie, dass sie ihre Belegwünsche bekommen. Alle Anmeldungen werden zeitunabhängig innerhalb der Bewerbungsfrist gleichwertig behandelt.
                            Nach Ende der Frist bekommen sie eine Benachrichtigung in welcher Veranstaltung Sie zugeteilt wurden.
                        </p>
                    </div>

                    <div class="card-body"> <h4>Nachrückverfahren</h4><br>
                        <p>
                            Falls nach der Ablauf der Vergabefrist noch Plätze übrig sind, werden diese nachträglich im Windhundverfahren (in der Regel mit der Dauer von 1 Woche) vergeben.
                        </p>
                    </div>
            </td>           
        </tr> 
    </table>
    <table class="tg" style="width: 100%;  margin: 1px;">
        <th class="tg-py0s"> 
            <a  style="color: #ffffff;" data-toggle="collapse" href="#bew" aria-expanded="true" aria-controls="bew">Zentrale Bewerbung</a> 
        </th>
        <tr style="width: 100%;">
            <td class="tg-28r4" style="padding:0px;"> 
                <div id="bew" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">Über das Formular unter Angabe von: <br><br>
                        <ul>  
                            <li>Vorname</li> 
                            <li>Nachname</li> 
                            <li>Matrikelnummer</li>  
                            <li>Studentische E-Mail-Adresse</li>  
                            <li>Studiengang</li> 
                            <li>Fachsemester</li>  
                            <li>Versuch (Wurde bereits das Seminar nicht bestanden?)</li>  
                            <li>3 Wunschthemen</li> 
                        </ul>   
                    </div>
                </div>
            </td>           
        </tr> 
    </table>
</div>
<br> 
<br>

<?php include 'navi_student.php'; ?>
<?php include 'footer.php'; ?>
