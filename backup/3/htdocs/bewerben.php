<?php include 'header.php';?>
    <h4 class="card-title">Bewerbung</h4>   
            
                   
                <div class="formbox">            
                        <form action="bewerben.php" method="post">
                            <div class="card-header" style="margin-bottom: 2%"><h4><u>Bewerbung auf ein Seminar- oder Abschlussarbeitsthema</u></h4></div>

                          <h6 style="background-color: #efefef; padding: 5px; margin: 5px;">persönliche Informationen</h6>

        
                            <table>
                                <tr>
                                 <td style="width: 17%;"> <label for="inputVorname"><b>Vorname:</b> </label>  </td> 
                                 <td><input type="text" class="form-control" id="inputVorname" > </td> 
                               </tr>

                                <tr>
                                 <td style="width: 17%;"> <label for="inputNachname"><b>Nachname:</b> </label>  </td> 
                                 <td><input type="text" class="form-control" id="inputNachname" > </td> 
                               </tr>

                                <tr>
                                 <td style="width: 17%;"> <label for="inputMatrikel"><b>Matrikelnummer:</b> </label>  </td> 
                                 <td><input type="text" class="form-control" id="inputMatrikel" > </td> 
                               </tr>

                                <tr>
                                 <td style="width: 17%;"> <label for="inputMail"><b>E-Mail:</b> </label>  </td> 
                                 <td><input type="text" class="form-control" id="inputMail" > </td> 
                               </tr>


                             <tr>
                                   <td><label for="inputStudiengang"><b>Studiengang:</b> </label> </td>
                                    <td><select class="form-control" id="Studiengang">
                                    <option></option>
                                    <option>Wirtschaftsinformatik</option>
                                    <option>Betriebswirtschaftslehre</option>
                                    <option>Volkswirtschaftslehre</option>
                                    <option>Wirtschaftspädagogik</option>
                                    </select></td>
                                </tr>

                                <tr>
                                 <td style="width: 17%;"> <label style="text-align:left" for="inputSemesteranzahl"><b>Aktuelles Fachsemester:</b> </label>  </td> 
                                 <td><input type="text" class="form-control" id="inputSemesteranzahl" placeholder="Bspw.: 5 "> </td> 
                               </tr>

                                <tr>
                                 <td style="width: 17%;" ><label style="text-align:left" for="inputCreditsranzahl"><b>Creditsanzahl:</b></label>  </td> 
                                 <td><input type="text" class="form-control" id="inputCreditsranzahl" placeholder="Anzahl der Credits"> </td> 
                               </tr>

                                </table>
                            <br>
                          <h6 style="background-color: #efefef; padding: 5px; margin: 5px;">Status-Informationen</h6>

 
                            <table>
                             <tr>
                                 <td> <label style="text-align:left" for="Kategorie"><b>Kategorie:</b></label> </td>    
                                 <td> <input type="radio" name="kategorie1" id="inlineRadio1" value="option1"> Seminarthema </input>    </td> 
                                   <td>  <input type="radio" name="kategorie1" id="inlineRadio1" value="option2"> Abschlussarbeit </input> 
                                 </td> 
                            </tr>
                            </table>

                        <table>
                                <tr>
                                 <td style="width: 17%;"> <label style="text-align:left" for="inputVorname"><b>Abgeschl. O-Phase:</b> </label>  </td> 
                                    <td><select class="form-control" id="oPhase">
                                    <option></option>
                                    <option>Ja</option>
                                    <option>Nein</option>
                                    </select></td>
                               </tr>

                                <tr>
                                 <td style="width: 17%; text-align:left; "> <label style="text-align:left" for="inputNachname"><b>Bereits an Seminar/Abschluss teilgenommen?:</b> </label>  </td> 
                                    <td><select class="form-control" id="Teilnahme">
                                    <option></option>
                                    <option>Ja</option>
                                    <option>Nein</option>
                                    </select></td>
                               </tr>
 
                               <tr>
                                   <td><label for="inputoPhase"><b>Belegwunsch 1:</b> </label></td>
                                    <td><select class="form-control" id="b1">
                                    <option></option>
                                    <option>Burger</option>
                                    <option>Pizza</option>
                                    <option>Salat</option>
                                    </select></td>
                                </tr>
                                   <td><label for="inputoPhase"><b>Belegwunsch 2:</b> </label></td>
                                    <td><select class="form-control" id="b1">
                                    <option></option>
                                    <option>Burger</option>
                                    <option>Pizza</option>
                                    <option>Salat</option>
                                    </select></td>
                                </tr>

                               <tr>
                                   <td><label for="inputoPhase"><b>Belegwunsch 3:</b> </label></td>
                                    <td><select class="form-control" id="b1">
                                    <option></option>
                                    <option>Burger</option>
                                    <option>Pizza</option>
                                    <option>Salat</option>
                                    </select></td>
                                </tr>

                             <tr>
                                 <td>                        
                                  <button type="button" style="margin-top:5px;margin-bottom:15px;" class="btn btn-primary">Bewerbung abschicken</button>
                                 </td>       
                             </tr>
                                </table>
   




                        </form>    
                </div>        
                              
            
<?php include 'navi.php';?>
<?php include 'footer.php';?>
