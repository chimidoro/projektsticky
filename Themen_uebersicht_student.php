<?php include 'header.php'; ?>

<h4 class="card-title">Übersicht der aktuellen Seminar- / Abschlussarbeitsthemen </h4> 
<br>

<div style="text-align: center">
    <table style="width: 100%;text-align: center">
           <tr>
                <th style="width: 20%; padding-right:2%;" class="tg-py0s">Semester</th>
                <th style="width: 20%; padding-right:2%;" class="tg-py0s">Art</th>
                <th style="width: 20%; padding-right:2%;" class="tg-py0s">Betreuer</th>
                <th style="width: 20%; padding-right:2%;" class="tg-py0s">Tags</th>
                <th style="width: 20%; padding-right:2%;" class="tg-py0s">Verf�gbarkeit</th>
            </tr>
            <tr>
                <td class="tg-28r4"><select style="width: 80%;" class="form-control">
                    <option>WiSe 17/18</option>
                </select> </td>
                
                <td class="tg-28r4"><select style="width: 80%;" class="form-control">
                <option>Achlussarbeit</option>
                <option>Seminararbeit</option>
                </select> </td>
                
                <td class="tg-28r4"><select style="width: 80%;" class="form-control">
                    <option>Schuhmann</option>
                </select> </td>

                <td class="tg-28r4"><select style="width: 90%;" class="form-control">
                    <option>operative Systeme</option>
                </select> </td>

                <td class="tg-28r4"><select  style="width: 80%;" class="form-control">
                <option>Verf�gbar</option>
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
        <a  style="color: #ffffff; " data-toggle="collapse"  href="#id2" aria-expanded="true" aria-controls="id2">Projektseminar: Entwicklung von Webapplikationen</a>
        <button type="button" class="btn btn-danger active btn-lg" style="float: right;" data-toggle="tooltip" title="Der Anmeldezeitraum ist leider abgelaufen">Anmeldung gesperrt</button>   <!--Button mit Tooltip-->
        <br>    <!-- Beginn Infolabels -->
        <span class="badge badge-dark">Bewerbungsverfahren</span> 
        <span class="badge badge-dark">Anmeldung von X bis Y</span>
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
                        <th class="tg-py0s">Semester</th>
                        <th class="tg-py0s">Verfügbarkeit</th>
                    </tr>
                    <tr>
                        <td class="tg-28r4">1.</td>
                        <td class="tg-28r4"> Entwicklung einer webbasierten Anwendung zur Vergabe von Seminar- / Abschlussarbeitsthemen mit unterschiedlichen Verfahren 
                            (Bewerbungs-, Belegungswunsch-, Windhund-Verfahren)</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">WiSe17/18</td>
                        <td class="tg-28r4">ja</td>
                    </tr>  
                    <tr>
                        <td class="tg-28r4">2.</td>
                        <td class="tg-28r4"> Entwickeln eines webbasierten Unterst�tzungssystems zur Inhaltsstrukturierung und Formatentscheidung von Lerninhalten einer multimedialen Lernumgebung 
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
                <br>
            </div>
        </td>           
    </tr> 
</table>


<!-- Tabelle 3 Windhund -->
<table class="tg" style="width: 100%;  margin: 1px;">   <!--Thema der Anmeldung mit sufklappbaren Unterthemen-->
    <th class="tg-py0s"> 
        <a  style="color: #ffffff; " data-toggle="collapse"  href="#id3" aria-expanded="true" aria-controls="id3">Projektseminar: Entwicklung von Webapplikationen</a>
        <a href="#" class="btn btn-success active btn-lg" role="button" aria-pressed="true" style="float: right;">zur Anmeldung</a>
        <br>    <!-- Beginn Infolabels -->
        <span class="badge badge-dark">Windhund-Nachrückverfahren</span> 
        <span class="badge badge-dark">Anmeldung möglich bis: 14.10.17</span>

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
                        <td class="tg-28r4"> Entwicklung einer webbasierten Anwendung zur Vergabe von Seminar- / Abschlussarbeitsthemen mit unterschiedlichen Verfahren 
                            (Bewerbungs-, Belegungswunsch-, Windhund-Verfahren)</td>
                        <td class="tg-28r4">Freier, Pascal</td>
                        <td class="tg-28r4">WiSe17/18</td>
                        <td class="tg-28r4">ja</td>
                    </tr>  
                    <tr>
                        <td class="tg-28r4">2.</td>
                        <td class="tg-28r4"> Entwickeln eines webbasierten Unterst�tzungssystems zur Inhaltsstrukturierung und Formatentscheidung von Lerninhalten einer multimedialen Lernumgebung 
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