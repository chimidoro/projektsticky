<?php

require_once('../models/login_model.php');

class Model {
    

    public function getlogin(){
            if(isset($_POST["einloggen"])){             // Wenn das Formular abgeschickt wird mit name = einloggen
                       $password = $_POST["passwort"];         
                       $benutzern = $_POST["benutzername"];
                       $dbpass= mysql_query("SELECT passwort FROM benutzer WHERE benutzername = '".$benutzern."' "); 
                       $row = mysql_fetch_array($dbpass);
                       $pw = $row['passwort'];          
                       $pass_corr = password_verify($password, $pw);

                           if($password != "" && $benutzern != ""){
                                   if($this->exist("benutzer WHERE benutzername = '".$this->save($benutzern)."'") && $pass_corr == TRUE ){
                                           $select = "SELECT id FROM benutzer WHERE benutzername = '".$this->save($benutzern)."'";
                                           $query = mysql_query($select);
                                           while($row = mysql_fetch_object($query)){
                                                   $_SESSION["acp"] = $row->id; // Loggt einen ein!
                                           }                               
                                           echo"<meta http-equiv='refresh' content='5; URL=google.de'>";
                                   }
                                   else{

                                          // Wenn falsch eingeloggt
                                           echo "<h1>Sorry</h1> Der Login schlug fehlmmmmmmm.</p>";                                                            
                                   }
                           }
                   }     
         }  
    }
?>