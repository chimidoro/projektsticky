<?php include 'header.php'; ?>

<br>
<h2 style="margin-bottom: 15px;" class="card-title">Themenvergabe für Seminar und Abschlussarbeiten</h2>

<div class="infos">
    Willkommen zum Tool zur Anmeldung und Vergabe von Abschlussarbeiten. <br>
    Hier finden Sie Informationen zur Themenvergabe von Abschluss- und Seminararbeiten. <br>
    <a href="href="Themen_uebersicht_student.php""><i class="fas fa-chevron-right"></i> zur Themenübersicht</a>
    
</div><br>
<p>
    
</p>


<div class="info"> <!-- Tabelle mit Informationen und Collapsefunktion -->

    <table class="tg" style="width: 100%;  margin: 1px;">

        <th class="tg-py0s">
            <div class="accordion-group accordion-caret" data-toggle="collapse" href="#collapseOne" >
                <div class="accordion-heading">
                    <a style="color: #ffffff;" class="accordion-toggle" data-toggle="collapse" href="#collapseOne">
                        <strong>Allgemeine Informationen</strong>
                    </a>
                </div>
            </div>
        </th>
        <tr style="width: 100%;">
            <td class="tg-28r4" style="padding:0px;"> 


                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >         
                    <!--<div class="card-body"> <h4>Testbox </h4><br>
                        <p>

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
                    </div>-->

                    <div class="card-body"> <h4 style="padding-bottom: 10px">Vorgehensweise: Anmeldung/Bewerbung auf ein Seminar</h4>
                        <p>
                        <ol>
                            <li>Informieren Sie sich auf dieser Informationsseite über die verschiedenen Vergabeverfahren.</li><br>
                            <li>Suchen Sie auf der folgenden Seite nach den passenden Modulen/Themen.<br>
                                <a href="Themen_uebersicht_student.php"><i class="fas fa-chevron-right"></i> zur Themenübersicht</a></li><br>
                            <li>Wenn sie das passende Thema gefunden haben, klicken sie auf den grünen Button.<br>
                                Sie werden dadurch zu dem Anmeldeformular weitergeleitet</li>
                        </ol>
                        </p>
                    </div>
                </div>
            </td>           
        </tr> 
    </table>
    <table class="tg" style="width: 100%;  margin: 1px;">
        <th class="tg-py0s">
            <div class="accordion-group accordion-caret" data-toggle="collapse" href="#collapseTwo" >
                <div class="accordion-heading">
                    <a style="color: #ffffff;" class="accordion-toggle" data-toggle="collapse" href="#collapseTwo">
                        <strong>Informationen zu den Vergabearten</strong>
                    </a>
                </div>
            </div>
        </th>
        <tr style="width: 100%;">
            <td class="tg-28r4" style="padding:0px;"> 

                <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >                     
                    <div class="card-body"> <h4>Wie funktionieren die Verfahren?</h4><br>
                        
                            Wie funktioniert shdas <b>Bewerbungsverfahren</b>?
                            Sie bewerben verbindlich sich für eine, von Ihnen, gewünschte Veranstaltung.
                            Anhand der folgend genannten Kriterien im Formular errechnet ein Algorithmus mit Hilfe eines Punktebewertungsschemas heraus, ob Sie die Bedingungen erfüllen, um
                            in die Veranstaltung zugelassen werden. Die Kriterien werden nicht gleichermaßen berechnet.
                            Die Bewerbung gilt nur innerhalb der Bewerbungsfrist.
                            Alle Anmeldungen werden zeitunabhängig innerhalb der Bewerbungsfrist gleichwertig behandelt.
                            Nach Ende der Frist bekommen sie eine Benachrichtigung in welcher Veranstaltung Sie zugeteilt wurden.
                            <br><br>
                            Wie funktioniert das <b>Windhundverfahren</b> (alternativ First Come First Serve)?
                            Die Bewerber, die sich verbindlich am schnellsten in eine Veranstaltung eintragen bekommen garantiert ihren gewünschten Platz. Interessenten einer
                            Veranstaltung sollten sich also schnellstmöglich eintragen, da sonst ihnen ein Platz entgehen würde.
                            Die Bewerbung gilt nur innerhalb der Bewerbungsfrist. Nach Ende der Frist bekommen sie eine Benachrichtigung in welcher Veranstaltung Sie zugeteilt wurden.
                            <br><br>
                            Wie funktioniert das <b>Belegungsverfahren</b>?
                            Sie wählen verbindlich im folgenden Formular drei verschiedene Themen absteigend nach ihrer gewählten Priorität aus.
                            Sie müssen in alle Themenauswahlfelder eine Priorität angeben. Die Bewerbung gilt nur innerhalb der Bewerbungsfrist. 
                            Anhand einer Algorithmik werden ihre Prioritäten berücksichtigt und das bestmögliche Optimum für alle Studenten ausgewertet. 
                            Trotzdessen ist es keine Garantie, dass sie ihre Belegwünsche bekommen. Alle Anmeldungen werden zeitunabhängig innerhalb der Bewerbungsfrist gleichwertig behandelt.
                            Nach Ende der Frist bekommen sie eine Benachrichtigung in welcher Veranstaltung Sie zugeteilt wurden.
                      
                    </div>             

                    <div class="card-body"> <h4>Nachrückverfahren</h4><br>
                        <p>
                            Ein Nachrückverfahren findet statt, um noch nicht vergebene Seminarthemen zu vergeben. <br>
                            Falls nach der Ablauf der Vergabefrist noch Plätze übrig sind, werden diese nachträglich im Windhundverfahren (in der Regel mit der Dauer von 1 Woche) vergeben.
                            Der Start dieses Verfahrens kann sich um einige Tage verzögern. Bitte prüfen Sie regelmäßig die Seite, damit Sie sicht rechtzeigtig für den Platz anmelden können.
                        </p>
                    </div>
                </div>
            </td>           
        </tr> 
    </table>
    <table class="tg" style="width: 100%;  margin: 1px;">
        <th class="tg-py0s">
            <div class="accordion-group accordion-caret" data-toggle="collapse" href="#collapseThree" >
                <div class="accordion-heading">
                    <a style="color: #ffffff;" class="accordion-toggle" data-toggle="collapse" href="#collapseThree">
                        <strong>Informationen zur Bewerbung</strong>
                    </a>
                </div>
            </div>
        </th>
        <tr style="width: 100%;">
            <td class="tg-28r4" style="padding:0px;"> 
                <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body"><h4 style="padding-bottom: 15px">Folgende Informationen müssen im Formular angegeben werden:</h4>                
                        <ul>  
                            <li>Vorname</li> 
                            <li>Nachname</li> 
                            <li>Matrikelnummer</li>  
                            <li>Studentische E-Mail-Adresse</li>  
                            <li>Studiengang</li> 
                            <li>Fachsemester</li>  
                            <li>Versuch (Wurde bereits das Seminar nicht bestanden?)</li>  
                            <li>3 Wunschthemen (bei Belegwunschverfahren</li> 
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
