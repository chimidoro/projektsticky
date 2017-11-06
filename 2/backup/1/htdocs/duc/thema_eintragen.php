            <?php include 'header.php';?>


        
        
       
                <h4 class="card-title">Titel hallihallo</h4> 
                         
                <div class="formbox">
                        
                        <form action="index.php" method="post">
                            <div class="card-header" style="margin-bottom: 2%"><h4><u>Thema eintragen</u></h4></div>
                       
                            <table>

                             <tr>
                                 <td style="width:30%;"> <label for="Kategorie"><b>Kategorie:</b></label> </td>    
                                 <td> <input type="radio" name="kategorie1" id="inlineRadio1" value="option1"> Seminarthema </input>    </td> 
                                   <td>  <input type="radio" name="kategorie1" id="inlineRadio1" value="option2"> Abschlussarbeit </input> 
                                 </td> 
                            </tr>
                             </table>
                            
                             <table>
                             <tr>
                                 <td style="width:30%;"><label for="Termine"><b>Bewerbungsfristen</b> </label> </td>
                                 <td><input type="text" class="form-control" id="Starttermin" placeholder="TT.MM.YYYY">
                                    <span>Starttermin</span> </td>
                                 <td><input type="text" class="form-control" id="Endtermin" placeholder="TT.MM.YYYY">
                                     <span>Endtermin</span> 
                                 </td>
                             </tr>
                            </table>
                             <table>
                             <tr>
                                 <td style="width:30%;"><label for="inputTitel"><b>Titel:</b></label>  </td> 
                                 <td><input type="text" class="form-control" id="inputTitel" placeholder="Titel"> </td> 
                             </tr>

                              <tr>
                                 <td style="width:30%;"><label for="Vorraussetzung"><b>Zulassungsvorraussetzung:</b></label>  </td> 
                                 <td><input type="text" class="form-control" name="Vorraussetzng" placeholder="(Optional)" id="form-control"></td>                             
                             </tr>
                             
                                <tr>
                                   <td style="width:30%;"><label for="bevStudiengang"><b>bevorzugter Studiengang:</b> </label></td>
                                    <td><select class="form-control" id="bevStudiengang">
                                    <option>Keiner</option>
                                    <option>Betriebswirtschaftslehre</option>
                                    <option>Wirtschaftsinformatik</option>
                                    <option>Volkswirtschaftslehre</option>
                                    <option>Wirtschaftspädagogik</option>
                                        </select></td>
                                </tr>

                              <tr>
                                 <td style="width:30%;"><label for="Tags"><b>Tags: </b></label>  </td> 
                                 <td><input type="text" class="form-control" name="Tags" id="form-control"></td>                             
                             </tr>

                               <tr>
                                   <td style="width:30%;"><label for="inputVerfahren"><b>Verfahren:</b> </label></td>
                                    <td><select class="form-control" id="Verfahren">
                                    <option>Windhund-Verfahren</option>
                                    <option>Bewerbungsverfahren</option>
                                    <option>Belegungswunsch-Verfahren</option>
                                    </select></td>
                                </tr>
                               <tr>
                                   
                                 <td style="width:30%;"><label for="inputBeschreibung"><b>Beschreibung:</b></label>  </td> 
                                 <td><textarea class="form-control" name="beschreibung" id="exampleFormControlTextarea1" rows="8" placeholder="Beschreibung des Themas"></textarea></td>                             
                             </tr>
                             <tr>
                              
                              <td>    <div class="card-header" style="margin-bottom: 2%">Thema eintragen</div> </td>       
                             </tr>
                             
                            </table>   
                        </form>    
                </div>


    <?php include 'navi.php';?>
    <?php include 'footer.php';?>    
    
    </body>
</html>