<?php include 'header.php';?>
    <h4 class="card-title">Bewerbung</h4>   
            
                   
                <div class="formbox">            
                        <form action="bewerben.php" method="post">
                            <div class="card-header" style="margin-bottom: 2%"><h4><u>Bewerbung auf ein Seminar- oder Abschlussarbeitsthema</u></h4></div>
                            <table>
                             <tr>
                                 <td> <label for="Kategorie"><b>Kategorie:</b></label> </td>    
                                 <td> <input type="radio" name="kategorie1" id="inlineRadio1" value="option1"> Seminarthema </input>    </td> 
                                   <td>  <input type="radio" name="kategorie1" id="inlineRadio1" value="option2"> Abschlussarbeit </input> 
                                 </td> 
                            </tr>
                            </table>
        
                            <table>

                             <tr>
                                   <td><label for="inputStudiengang"><b>Studiengang:</b> </label></td>
                                    <td><select class="form-control" id="Studiengang">
                                    <option></option>
                                    <option>Wirtschaftsinformatik</option>
                                    <option>Betriebswirtschaftslehre</option>
                                    <option>Volkswirtschaftslehre</option>
                                    <option>Wirtschaftspädagogik</option>
                                    </select></td>
                                </tr>

                                <tr>
                                 <td style="width: 17%;"><label for="inputSemesteranzahl"><b>Aktuelles Fachsemester:</b></label>  </td> 
                                 <td><input type="text" class="form-control" id="inputSemesteranzahl" placeholder="Bspw.: 5 "> </td> 
                               </tr>

                                <tr>
                                 <td style="width: 17%;" ><label for="inputCreditsranzahl"><b>Creditsanzahl:</b></label>  </td> 
                                 <td><input type="text" class="form-control" id="inputCreditsranzahl" placeholder="Anzahl der Credits"> </td> 
                               </tr>

                          
                               <tr>
                                   <td><label for="inputoPhase"><b>Abgeschlossene O-Phase:</b> </label></td>
                                    <td><select class="form-control" id="oPhase">
                                    <option>Ja</option>
                                    <option>Nein</option>
                                    </select></td>
                                </tr>

                               <tr>
                                   <td><label for="inputTeilnahme"><b>Bereits an ein Seminar/Abschlussarbeit teilgenommen aber nicht abgegeben:</b> </label></td>
                                    <td><select class="form-control" id="Teilnahme">
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

                               <tr>
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
                              
                              <td>    <div class="card-header" style="margin-bottom: 2%">Thema eintragen</div> </td>       
                             </tr>
                             
                            </table>   
                        </form>    
                </div>        
                              
            
<?php include 'navi.php';?>
<?php include 'footer.php';?>
