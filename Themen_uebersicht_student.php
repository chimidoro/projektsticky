<?php include 'header.php'; ?>
<br>
<h2 class="card-title">Übersicht der aktuellen Seminar- / Abschlussarbeitsthemen </h2> 
<br>

<div style="text-align: center">
    <table style="width: 100%;text-align: center">
        <tr>
            <th style="width: 25%; padding-right:2%;" class="tg-py0s">Semester</th>
            <th style="width: 25%; padding-right:2%;" class="tg-py0s">Art</th>
            <th style="width: 25%; padding-right:2%;" class="tg-py0s">Betreuer</th>
            <th style="width: 25%; padding-right:2%;" class="tg-py0s">Verfügbarkeit</th>
        </tr>
        <tr>
            <td class="tg-28r4"><select style="width: 90%;" class="form-control">
                    <option>WiSe 17/18</option>
                </select> </td>

            <td class="tg-28r4"><select style="width: 90%;" class="form-control">
                    <option>Abschlussarbeit</option>
                    <option>Seminararbeit</option>
                </select> </td>

            <td class="tg-28r4"><select style="width: 90%;" class="form-control">
                    <option>Prof. Dr. Schuhmann</option>
                </select> </td>

            <td class="tg-28r4"><select  style="width: 90%;" class="form-control">
                    <option>Verfügbar</option>
                    <option>Vergeben</option>
                </select> </td>

        </tr>                                                   
    </table>
</div>
<br>



<!--Button Collapse Test

<!-- <button data-toggle="collapse" data-target="#demo">Collapsible</button>    

<div id="demo" class="collapse">
Lorem ipsum dolor text....
</div> -->

<!-- Tabelle 2 Bewerbungsverfahren -->
<table class="tg" style="width: 100%;  margin: 1px;">   <!--Thema der Anmeldung mit sufklappbaren Unterthemen-->
    <th class="tg-py0s"> 
        <a  style="color: #ffffff; " data-toggle="collapse"  href="#id2" aria-expanded="true" aria-controls="id2"> Projektseminar: Entwicklung von Webapplikationen <span class="badge badge-info" data-toggle="tooltip" title="Art des Themas">Seminarthemen</span></a>
        <button type="button" class="btn btn-secondary disabled btn-lg" style="float: right; min-width: 190px;" data-toggle="tooltip" title="Der Anmeldezeitraum ist leider abgelaufen">Anmeldung gesperrt</button>   <!--Button mit Tooltip-->
        <br>    <!-- Beginn Infolabels -->
        <span class="badge badge-primary" data-toggle="tooltip" title="Semester">WiSe 17/18</span>
        <span class="badge badge-primary" data-toggle="tooltip" title="Art des Verfahrens">Bewerbungsverfahren</span> 
        <span class="badge badge-primary" data-toggle="tooltip" title="Anmeldezeitraum">01.10.17 - 07.10.17</span>


    </th>
    <tr style="width: 100%;">
        <td class="tg-28r4" style="padding:0px;"> 

            <div id="id2" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">   
                <!--<div class="blue">
                    allgemeine Informationen <!--<a href="#" class="btn btn-info active btn-sm" role="button" aria-pressed="true" style="float: right;">mehr Infos</a>
                </div>-->

                                <!--<table align="center" valign="middle" class="tg" style="width:100%" >
                    <tr>
                        <th class="tg-py0s">Verfahren</th>
                        <th class="tg-py0s">Anmeldebeginn</th>
                        <th class="tg-py0s">Anmeldungsende</th>
                        <th class="tg-py0s">weitere Infos</th>
                    </tr>
                    <tr>
                        <td class="tg-28r4">Belegwunsch</td>
                        <td class="tg-28r4">1.10.17</td>
                        <td class="tg-28r4">14.10.17</td>
                        <td class="tg-28r4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
                            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
                            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                            consetetur sadipscing elitr, sed diam nonumy eirmod
                        </td>
                    </tr>  
                </table>-->
                <div class="blue">
                    <!--Themenliste <!--<a href="#" class="btn btn-info active btn-sm" role="button" aria-pressed="true" style="float: right;">mehr Infos</a>-->
                </div>
                <table align="center" valign="middle" class="tg" style="width:100%" >
                    <tr>
                        <th class="tg-py0s">ID</th>
                        <th class="tg-py0s">Thema</th>
                        <th class="tg-py0s">Betreuer</th>
                        <th class="tg-py0s">Verfügbarkeit</th>
                    </tr>
                    <tr>
                        <td class="tg-28r4">1.</td>
                        <td class="tg-28r4"> Entwicklung einer webbasierten Anwendung zur Vergabe von Seminar- / Abschlussarbeitsthemen mit unterschiedlichen Verfahren 
                            (Bewerbungs-, Belegungswunsch-, Windhund-Verfahren)</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">ja</td>
                    </tr>  
                    <tr>
                        <td class="tg-28r4">2.</td>
                        <td class="tg-28r4"> Entwickeln eines webbasierten Unterstützungssystems zur Inhaltsstrukturierung und Formatentscheidung von Lerninhalten einer multimedialen Lernumgebung 
                            in Anlehnung an das DO-ID-Modell</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">ja</td>
                    </tr> 
                    <tr>
                        <td class="tg-28r4">3.</td>
                        <td class="tg-28r4">  Entwickeln einer webbasierten Anwendung zur automatisierten Platzzuweisung bei der anonymen Klausur</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">ja</td>
                    </tr> 
                    <tr>
                        <td class="tg-28r4">4.</td>
                        <td class="tg-28r4" > Entwicklung einer webbasierten Anwendung zur Vergabe von Seminar- / Abschlussarbeitsthemen mit unterschiedlichen Verfahren 
                            (Bewerbungs-, Belegungswunsch-, Windhund-Verfahren)</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">nein</td>
                    </tr> 
                </table>
                <br>
            </div>
        </td>           
    </tr> 
</table>


<!-- Tabelle 3 Windhund -->
<table class="tg" style="width: 100%;  margin: 1px;">   <!--Thema der Anmeldung mit sufklappbaren Unterthemen-->
    <th class="tg-py0s"> 
        <a  style="color: #ffffff; " data-toggle="collapse"  href="#id3" aria-expanded="true" aria-controls="id3">Professur für Anwendungssysteme und E-Business <span class="badge badge-info" data-toggle="tooltip" title="Art des Themas">Abschlussarbeiten</span></a>
        <a href="#" class="btn btn-success active btn-lg" role="button" aria-pressed="true" style="float: right; min-width: 190px;">zur Anmeldung</a>
        <br>    <!-- Beginn Infolabels -->
        <span class="badge badge-primary" data-toggle="tooltip" title="Semester">WiSe 17/18</span>
        <span class="badge badge-primary" data-toggle="tooltip" title="Art des Verfahrens">Windhund-Nachrückverfahren</span> 
        <span class="badge badge-primary" data-toggle="tooltip" title="Anmeldezeitraum">Anmeldung möglich bis: 14.10.17</span>
    </th>
    <tr style="width: 100%;">
        <td class="tg-28r4" style="padding:0px;"> 

            <div id="id3" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">   
                <!--<div class="blue">
                    allgemeine Informationen <!--<a href="#" class="btn btn-info active btn-sm" role="button" aria-pressed="true" style="float: right;">mehr Infos</a>
                </div>-->

                               <!--<table align="center" valign="middle" class="tg" style="width:100%" >
                    <tr>
                        <th class="tg-py0s">Verfahren</th>
                        <th class="tg-py0s">Anmeldebeginn</th>
                        <th class="tg-py0s">Anmeldungsende</th>
                        <th class="tg-py0s">weitere Infos</th>
                    </tr>
                    <tr>
                        <td class="tg-28r4">Belegwunsch</td>
                        <td class="tg-28r4">1.10.17</td>
                        <td class="tg-28r4">14.10.17</td>
                        <td class="tg-28r4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
                            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
                            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                            consetetur sadipscing elitr, sed diam nonumy eirmod
                        </td>
                    </tr>  
                </table>-->
                <div class="blue">
                    <!--Themenliste <!--<a href="#" class="btn btn-info active btn-sm" role="button" aria-pressed="true" style="float: right;">mehr Infos</a>-->
                </div>
                <table align="center" valign="middle" class="tg" style="width:100%" >
                    <tr>
                        <th class="tg-py0s">ID</th>
                        <th class="tg-py0s">Thema</th>
                        <th class="tg-py0s">Betreuer</th>
                        <th class="tg-py0s">Semester</th>
                        <th class="tg-py0s">Verfügbarkeit</th>
                    </tr>
                    <tr>
                        <td class="tg-28r4">1.</td>
                        <td><a tabindex="0" role="button" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="Kurzbeschreibung" data-content="
                               Bei dem Marktführer in der europaweiten bargeldlosen Unterwegsversorgung (mit Tankkarten) stehen umfangreiche Datenbestände zur Risikosituation von Kunden (> 100.000), deren Zahlverhalten und den Zahlungsausfällen von Kundenforderungen sowie der Kreditversicherung von Kundenforderungen mit differenzierten Vertragskonditionen zur Verfügung. Dabei handelt es sich um historisierte Daten, die sich auch auf Unternehmen mit Sitz in verschiedenen europäischen Ländern beziehen. In der Masterarbeit sollen Simulationsmodelle entwickelt werden, mit denen sich finanzielle Wirkungen von Konditionenveränderungen, Risikoveränderungen oder der Veränderung von Vertragsparametern der Kreditversicherungsverträge beurteilen lassen. Studierende, die das Thema bearbeiten wollen, erhalten dazu eine sechs bis achtwöchige Einarbeitung in das Geschäftsmodell des Unternehmens im Rahmen eines Praktikums in Ratingen."
                               class="frei">Praxisarbeit (in Zusammenarbeit mit DKV Euro Service): Einsatzmöglichkeiten einer Datenbasis zur Simulation von Wirkungen auf das operative Ergebnis bei der Finanzierung von Forderungen gegenüber Kunden eines Unternehmens im Tankkartengeschäft (nur Master) </a></td> <!-- Popover-Stil nach https://www.uni-goettingen.de/de/46268.html--> 
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">WiSe17/18</td>
                        <td class="tg-28r4">ja</td>
                    </tr>  
                    <tr>
                        <td class="tg-28r4">2.</td>
                        <td class="tg-28r4"> Entwickeln eines webbasierten Unterstützungssystems zur Inhaltsstrukturierung und Formatentscheidung von Lerninhalten einer multimedialen Lernumgebung 
                            in Anlehnung an das DO-ID-Modell</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">WiSe17/18</td>
                        <td class="tg-28r4">ja</td>
                    </tr> 
                    <tr>
                        <td class="tg-28r4">3.</td>
                        <td class="tg-28r4">  Entwickeln einer webbasierten Anwendung zur automatisierten Platzzuweisung bei der anonymen Klausur</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">WiSe17/18</td>
                        <td class="tg-28r4">ja</td>
                    </tr> 
                    <tr>
                        <td class="tg-28r4">4.</td>
                        <td class="tg-28r4" > Entwicklung einer webbasierten Anwendung zur Vergabe von Seminar- / Abschlussarbeitsthemen mit unterschiedlichen Verfahren 
                            (Bewerbungs-, Belegungswunsch-, Windhund-Verfahren)</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">WiSe17/18</td>
                        <td class="tg-28r4">nein</td>
                    </tr> 
                </table>
            </div>
        </td>           
    </tr> 
</table>

<table class="tg" style="width: 100%;  margin: 1px;">   <!--Thema der Anmeldung mit sufklappbaren Unterthemen-->
    <th class="tg-py0s"> 
        <a  style="color: #ffffff; " data-toggle="collapse"  href="#id4" aria-expanded="true" aria-controls="id4"> Projektseminar: Entwicklung von Webapplikationen</a>
        <button type="button" class="btn btn-danger disabled btn-lg" style="float: right; min-width: 190px;" data-toggle="tooltip" title="Der Anmeldezeitraum ist leider abgelaufen">Anmeldung gesperrt</button>   <!--Button mit Tooltip-->
        <br>    <!-- Beginn Infolabels -->
        <span class="badge badge-info" data-toggle="tooltip" title="Art des Themas">Seminarthemen</span>
        <span class="badge badge-info" data-toggle="tooltip" title="Semester">WiSe 17/18</span>
        <span class="badge badge-info" data-toggle="tooltip" title="Art des Verfahrens">Bewerbungsverfahren</span> 
        <span class="badge badge-info" data-toggle="tooltip" title="Anmeldezeitraum">Anmeldung von X bis Y</span>


    </th>
    <tr style="width: 100%;">
        <td class="tg-28r4" style="padding:0px;"> 

            <div id="id4" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">   
                <!--<div class="blue">
                    allgemeine Informationen <!--<a href="#" class="btn btn-info active btn-sm" role="button" aria-pressed="true" style="float: right;">mehr Infos</a>
                </div>-->

                                <!--<table align="center" valign="middle" class="tg" style="width:100%" >
                    <tr>
                        <th class="tg-py0s">Verfahren</th>
                        <th class="tg-py0s">Anmeldebeginn</th>
                        <th class="tg-py0s">Anmeldungsende</th>
                        <th class="tg-py0s">weitere Infos</th>
                    </tr>
                    <tr>
                        <td class="tg-28r4">Belegwunsch</td>
                        <td class="tg-28r4">1.10.17</td>
                        <td class="tg-28r4">14.10.17</td>
                        <td class="tg-28r4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
                            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
                            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                            consetetur sadipscing elitr, sed diam nonumy eirmod
                        </td>
                    </tr>  
                </table>-->
                <div class="blue">
                    <!--Themenliste <!--<a href="#" class="btn btn-info active btn-sm" role="button" aria-pressed="true" style="float: right;">mehr Infos</a>-->
                </div>
                <table align="center" valign="middle" class="tg" style="width:100%" >
                    <tr>
                        <th class="tg-py0s">ID</th>
                        <th class="tg-py0s">Thema</th>
                        <th class="tg-py0s">Betreuer</th>
                        <th class="tg-py0s">Verfügbarkeit</th>
                    </tr>
                    <tr>
                        <td class="tg-28r4">1.</td>
                        <td class="tg-28r4"> Entwicklung einer webbasierten Anwendung zur Vergabe von Seminar- / Abschlussarbeitsthemen mit unterschiedlichen Verfahren 
                            (Bewerbungs-, Belegungswunsch-, Windhund-Verfahren)</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">ja</td>
                    </tr>  
                    <tr>
                        <td class="tg-28r4">2.</td>
                        <td class="tg-28r4"> Entwickeln eines webbasierten Unterstützungssystems zur Inhaltsstrukturierung und Formatentscheidung von Lerninhalten einer multimedialen Lernumgebung 
                            in Anlehnung an das DO-ID-Modell</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">ja</td>
                    </tr> 
                    <tr>
                        <td class="tg-28r4">3.</td>
                        <td class="tg-28r4">  Entwickeln einer webbasierten Anwendung zur automatisierten Platzzuweisung bei der anonymen Klausur</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">ja</td>
                    </tr> 
                    <tr>
                        <td class="tg-28r4">4.</td>
                        <td class="tg-28r4" > Entwicklung einer webbasierten Anwendung zur Vergabe von Seminar- / Abschlussarbeitsthemen mit unterschiedlichen Verfahren 
                            (Bewerbungs-, Belegungswunsch-, Windhund-Verfahren)</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">nein</td>
                    </tr> 
                </table>
                <br>
            </div>
        </td>           
    </tr> 
</table>


<!-- Tabelle 3 Windhund -->
<table class="tg" style="width: 100%;  margin: 1px;">   <!--Thema der Anmeldung mit sufklappbaren Unterthemen-->
    <th class="tg-py0s"> 
        <a  style="color: #ffffff; " data-toggle="collapse"  href="#id5" aria-expanded="true" aria-controls="id5">Professur für Anwendungssysteme und E-Business</a>
        <a href="#" class="btn btn-success active btn-lg" role="button" aria-pressed="true" style="float: right; min-width: 190px;">zur Anmeldung</a>
        <br>    <!-- Beginn Infolabels -->
        <span class="badge badge-dark" data-toggle="tooltip" title="Art des Themas">Abschlussarbeiten</span>
        <span class="badge badge-dark" data-toggle="tooltip" title="Semester">WiSe 17/18</span>
        <span class="badge badge-dark" data-toggle="tooltip" title="Art des Verfahrens">Windhund-Nachrückverfahren</span> 
        <span class="badge badge-dark" data-toggle="tooltip" title="Anmeldezeitraum">Anmeldung möglich bis: 14.10.17</span>
    </th>
    <tr style="width: 100%;">
        <td class="tg-28r4" style="padding:0px;"> 

            <div id="id5" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">   
                <!--<div class="blue">
                    allgemeine Informationen <!--<a href="#" class="btn btn-info active btn-sm" role="button" aria-pressed="true" style="float: right;">mehr Infos</a>
                </div>-->

                               <!--<table align="center" valign="middle" class="tg" style="width:100%" >
                    <tr>
                        <th class="tg-py0s">Anmeldebeginn</th>
                        <th class="tg-py0s">Anmeldungsende</th>
                        <th class="tg-py0s">weitere Infos</th>
                    </tr>
                    <tr>
                        <td class="tg-28r4">Belegwunsch</td>
                        <td class="tg-28r4">1.10.17</td>
                        <td class="tg-28r4">14.10.17</td>
                        <td class="tg-28r4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
                            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
                            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                            consetetur sadipscing elitr, sed diam nonumy eirmod
                        </td>
                    </tr>  
                </table>-->
                <div class="blue">
                    <!--Themenliste <!--<a href="#" class="btn btn-info active btn-sm" role="button" aria-pressed="true" style="float: right;">mehr Infos</a>-->
                </div>
                <table align="center" valign="middle" class="tg" style="width:100%" >
                    <tr>
                        <th class="tg-py0s">ID</th>
                        <th class="tg-py0s">Thema</th>
                        <th class="tg-py0s">Betreuer</th>
                        <th class="tg-py0s">Semester</th>
                        <th class="tg-py0s">Verfügbarkeit</th>
                    </tr>
                    <tr>
                        <td class="tg-28r4">1.</td>
                        <td><a tabindex="0" role="button" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="Kurzbeschreibung" data-content="
                               Bei dem Marktführer in der europaweiten bargeldlosen Unterwegsversorgung (mit Tankkarten) stehen umfangreiche Datenbestände zur Risikosituation von Kunden (> 100.000), deren Zahlverhalten und den Zahlungsausfällen von Kundenforderungen sowie der Kreditversicherung von Kundenforderungen mit differenzierten Vertragskonditionen zur Verfügung. Dabei handelt es sich um historisierte Daten, die sich auch auf Unternehmen mit Sitz in verschiedenen europäischen Ländern beziehen. In der Masterarbeit sollen Simulationsmodelle entwickelt werden, mit denen sich finanzielle Wirkungen von Konditionenveränderungen, Risikoveränderungen oder der Veränderung von Vertragsparametern der Kreditversicherungsverträge beurteilen lassen. Studierende, die das Thema bearbeiten wollen, erhalten dazu eine sechs bis achtwöchige Einarbeitung in das Geschäftsmodell des Unternehmens im Rahmen eines Praktikums in Ratingen."
                               class="frei">Praxisarbeit (in Zusammenarbeit mit DKV Euro Service): Einsatzmöglichkeiten einer Datenbasis zur Simulation von Wirkungen auf das operative Ergebnis bei der Finanzierung von Forderungen gegenüber Kunden eines Unternehmens im Tankkartengeschäft (nur Master) </a></td> <!-- Popover-Stil nach https://www.uni-goettingen.de/de/46268.html--> 
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">WiSe17/18</td>
                        <td class="tg-28r4">ja</td>
                    </tr>  
                    <tr>
                        <td class="tg-28r4">2.</td>
                        <td class="tg-28r4"> Entwickeln eines webbasierten Unterstützungssystems zur Inhaltsstrukturierung und Formatentscheidung von Lerninhalten einer multimedialen Lernumgebung 
                            in Anlehnung an das DO-ID-Modell</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">WiSe17/18</td>
                        <td class="tg-28r4">ja</td>
                    </tr> 
                    <tr>
                        <td class="tg-28r4">3.</td>
                        <td class="tg-28r4">  Entwickeln einer webbasierten Anwendung zur automatisierten Platzzuweisung bei der anonymen Klausur</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">WiSe17/18</td>
                        <td class="tg-28r4">ja</td>
                    </tr> 
                    <tr>
                        <td class="tg-28r4">4.</td>
                        <td class="tg-28r4" > Entwicklung einer webbasierten Anwendung zur Vergabe von Seminar- / Abschlussarbeitsthemen mit unterschiedlichen Verfahren 
                            (Bewerbungs-, Belegungswunsch-, Windhund-Verfahren)</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">WiSe17/18</td>
                        <td class="tg-28r4">nein</td>
                    </tr> 
                </table>
            </div>
        </td>           
    </tr> 
</table>

<?php include 'navi_student.php'; ?>
<?php include 'footer.php'; ?>