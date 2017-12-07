<?php include 'header.php';?>
    <h4 class="card-title">Informationsseite bearbeiten</h4>  
    
          
                 <form action="bewerben.php" method="post">
              <table align="center" valign="middle" class="tg" style="width: 90%;">
                  <tr>
                    <th class="tg-py0s">Informationen</th>
                    <th class="tg-py0s">Termine und Zeitpunkte</th>
                  </tr>
                  <tr>
                        <td style="width:40%" class="tg-28r4"><b>Themenveröffentlichung</b></td>
                        <td style="width:60%" class="tg-28r4"><input type="text" class="form-control" id="text1" ></td>
                  </tr>
                    <tr>
                        <td style="width:40%" class="tg-28r4"><b>Freischaltung des Formulars</b></td>
                        <td style="width:60%" class="tg-28r4">
                            <select class="form-control" id="Verfahren">
                                <option>Deaktiviert</option>
                                <option>Aktiviert</option>
                            </select></td>
                  </tr>         
                  <tr>
                    <td style="width:40%" class="tg-28r4"><b>Bewerbungszeitraum</b></td>
                    <td style="width:60%" class="tg-28r4"><input type="text" class="form-control" id="text2" ></td>
                  </tr>
                   <tr>
                    <td style="width:40%" class="tg-28r4"><b>Themenvergabe</b></td>
                    <td style="width:60%" class="tg-28r4"><input type="text" class="form-control" id="text3" ></td>
                  </tr>
                  <tr>
                    <td style="width:40%" class="tg-28r4"><b>Anmeldung im FlexNow</b></td>
                    <td style="width:60%" class="tg-28r4"><input type="text" class="form-control" id="text4" ></td>
                  </tr>        
                </table>   

               <table align="center" valign="middle"  class="tg" style="width: 90%;">
                   <th class="tg-py0s">  Allgemeine Informationen</th>
                   <tr>                    
                   <td>
                       <textarea class="form-control" name="infos" id="infos" rows="8" placeholder="Allgemeine Informationen"></textarea>
                   </td>
                    </tr>                       
                </table>
                     
               <table align="center" valign="middle"  class="tg" style="width: 90%;">
                   <th class="tg-py0s">  Zentrale Bewerbung</th>
                   <tr>                    
                   <td>
                       <textarea class="form-control" name="bew" id="bew" rows="8" placeholder="bewerbung"></textarea>
                   </td>
                    </tr> 
  
                 </table>
                 </form>
                         
    <button style="margin: 4%;"type="button" class="btn btn-primary">Submit</button>     
                           
                    

    
    <br><br>
                 
<?php include 'navi.php';?>
<?php include 'footer.php';?>
