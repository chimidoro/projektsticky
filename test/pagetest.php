<?php

/* ###################################################################### PAGE OHNE ALLES */

function pagefunc($perPage, $table){
	$select="SELECT id FROM ".$table;
	
	$query = mysql_query($select); // DB Abfragee
	$p = "3";                                // Anzahl der Links die in der Seitenavigation ausgegeben werden
	$total = mysql_num_rows($query);        // liefert die Anzahl der Datensaetze der Abfrage
	$seiten = ceil($total / $perPage);     // Berechnet die Seitenanzahl insgesamt
	
	// ------------------------------------------------------------------------
	if($seiten > 1){
		if($_GET['go'] != "" OR !isset($_GET['go'])){
			$go = 1;
		}
		if($_GET['go'] <= 0 OR $_GET['go'] > $seiten){
			$go = 1;
		}
		else{
		    $go = mysql_real_escape_string($_GET['go']);
		}
		$links = array(); // Linkkette bilden
		// Seite die vor der aktuellen Seite kommt definieren
		if(($go - $p) < 1){
			$davor = $go - 1;
		}
		else{
			$davor = $p;
		}            
		// Seite die nach der aktuellen Seite kommt definieren
		if(($go + $p) > $seiten){
			$danach = $seiten - $go;
		}
		else{
			$danach = $p;
		}      
		$off = ($go - $davor); // Variable definieren             
		if ($go- $davor > 1){ // Link definieren => Zur Erste Seite springen         
			$first = 1;
		    $links[] = "<a href='?go=".$first."' title=\"Zur ersten Seite springen\">&laquo; Erste ...</a>\n";      
		}      
		if($go != 1){ // Link definieren => eine Seite zurueck blaettern          
		    $prev = $go-1;
		    $links[] = "<a href='?go=".$prev."' title=\"Eine Seite zurueck blaettern\"> &laquo;</a>\n";
		}
		for($i = $off; $i <= ($go + $danach); $i++){ // einzelne Seitenlinks erzeugen
		  if ($i != $go){  // Link definieren            
		        $links[] = "<a href='?go=".$i."'>$i</a>\n";
		  }
		  elseif($i == $seiten) { // aktuelle Seite, ein Link ist nicht erforderlich
		        $links[] = "<span class=\"current\">[ $i ]</span>\n";
		  }
		  elseif($i == $go){ // aktuelle Seite, ein Link ist nicht erforderlich             
		        $links[] = "<span class=\"current\">[ $i ]</span>\n";
		  } // close if $i      
		}                
		if($go != $seiten){ // Link definieren => eine Seite weiter blaettern       
		    $next = $go+1;
		    $links[] = "<a href='?go=".$next."' title=\"Eine Seite weiter blaettern\"> &raquo; </a>\n";
		}       
		if($seiten - $go - $p > 0 ){ // Link definieren => Zur letzen Seite springen   
		    $last = $seiten; 
		    $links[] = "<a href='?go=".$last."' title=\"Zur letzten Seite springen\">... Letzte &raquo;</a>\n";
		}
		$start = ($go-1) * $perPage;             // Berechne den Startwert fuer die DB
		$link_string = implode(" ", $links); // Zusammenfuegen der einzelnen Links zu einem String
		
		// -------------------------------------- Seitennavigation ausgeben ----------------------------
		echo "<br><center>";
		echo "Seite ".$go." von ".$seiten."<br>";
		echo $link_string; // Ausgabe der Seitennavigation
		echo "</center><br>";
	}
}


/* ###################################################################### PAGE FÜR KOMMIS */

function pagecommi($perPage, $table, $id){
	$select="SELECT id FROM ".$table." WHERE news_id ='".$id."'";
	
	$query = mysql_query($select); // DB Abfragee
	$p = "3";                                // Anzahl der Links die in der Seitenavigation ausgegeben werden
	$total = mysql_num_rows($query);        // liefert die Anzahl der Datensaetze der Abfrage
	$seiten = ceil($total / $perPage);     // Berechnet die Seitenanzahl insgesamt
	
	// ------------------------------------------------------------------------
	if($seiten > 1){
		if($_GET['go'] != "" OR !isset($_GET['go'])){
			$go = 1;
		}
		if($_GET['go'] <= 0 OR $_GET['go'] > $seiten){
			$go = 1;
		}
		else{
		    $go = mysql_real_escape_string($_GET['go']);
		}
		$links = array(); // Linkkette bilden
		// Seite die vor der aktuellen Seite kommt definieren
		if(($go - $p) < 1){
			$davor = $go - 1;
		}
		else{
			$davor = $p;
		}            
		// Seite die nach der aktuellen Seite kommt definieren
		if(($go + $p) > $seiten){
			$danach = $seiten - $go;
		}
		else{
			$danach = $p;
		}      
		$off = ($go - $davor); // Variable definieren             
		if ($go- $davor > 1){ // Link definieren => Zur Erste Seite springen         
			$first = 1;
		    $links[] = "<a href='?id=".$_REQUEST['id']."&go=".$first."' title=\"Zur ersten Seite springen\">&laquo; Erste ...</a>\n";      
		}      
		if($go != 1){ // Link definieren => eine Seite zurueck blaettern          
		    $prev = $go-1;
		    $links[] = "<a href='?id=".$_REQUEST['id']."&go=".$prev."' title=\"Eine Seite zurueck blaettern\"> &laquo;</a>\n";
		}
		for($i = $off; $i <= ($go + $danach); $i++){ // einzelne Seitenlinks erzeugen
		  if ($i != $go){  // Link definieren            
		        $links[] = "<a href='?id=".$_REQUEST['id']."&go=".$i."'>$i</a>\n";
		  }
		  elseif($i == $seiten) { // aktuelle Seite, ein Link ist nicht erforderlich
		        $links[] = "<span class=\"current\">[ $i ]</span>\n";
		  }
		  elseif($i == $go){ // aktuelle Seite, ein Link ist nicht erforderlich             
		        $links[] = "<span class=\"current\">[ $i ]</span>\n";
		  } // close if $i      
		}                
		if($go != $seiten){ // Link definieren => eine Seite weiter blaettern       
		    $next = $go+1;
		    $links[] = "<a href='?id=".$_REQUEST['id']."&go=".$next."' title=\"Eine Seite weiter blaettern\"> &raquo; </a>\n";
		}       
		if($seiten - $go - $p > 0 ){ // Link definieren => Zur letzen Seite springen   
		    $last = $seiten; 
		    $links[] = "<a href='?id=".$_REQUEST['id']."&go=".$last."' title=\"Zur letzten Seite springen\">... Letzte &raquo;</a>\n";
		}
		$start = ($go-1) * $perPage;             // Berechne den Startwert fuer die DB
		$link_string = implode(" ", $links); // Zusammenfuegen der einzelnen Links zu einem String
		
		// -------------------------------------- Seitennavigation ausgeben ----------------------------
		echo "<br><center>";
		echo "Seite ".$go." von ".$seiten."<br>";
		echo $link_string; // Ausgabe der Seitennavigation
		echo "</center><br>";
	}
}


/* ####################################################################### PAGE MIT TYPANGABE */

function pagemittyp($perPage, $table, $gfxtyp){
	$where = " WHERE typ = '".$gfxtyp."'";
	$select= "SELECT id FROM ".$table.$where;
	
	$query = mysql_query($select); // DB Abfragee
	$p = "3";                                // Anzahl der Links die in der Seitenavigation ausgegeben werden
	$total = mysql_num_rows($query);        // liefert die Anzahl der Datensaetze der Abfrage
	$seiten = ceil($total / $perPage);     // Berechnet die Seitenanzahl insgesamt
	
	// ------------------------------------------------------------------------
	if($seiten > 1){
		if($_GET['go'] != "" OR !isset($_GET['go'])){
			$go = 1;
		}
		if($_GET['go'] <= 0 OR $_GET['go'] > $seiten){
			$go = 1;
		}
		else{
		    $go = mysql_real_escape_string($_GET['go']);
		}
		$links = array(); // Linkkette bilden
		// Seite die vor der aktuellen Seite kommt definieren
		if(($go - $p) < 1){
			$davor = $go - 1;
		}
		else{
			$davor = $p;
		}            
		// Seite die nach der aktuellen Seite kommt definieren
		if(($go + $p) > $seiten){
			$danach = $seiten - $go;
		}
		else{
			$danach = $p;
		}      
		$off = ($go - $davor); // Variable definieren             
		if ($go- $davor > 1){ // Link definieren => Zur Erste Seite springen         
			$first = 1;
		    $links[] = "<a href='?go=".$first."' title=\"Zur ersten Seite springen\">&laquo; Erste ...</a>\n";      
		}      
		if($go != 1){ // Link definieren => eine Seite zurueck blaettern          
		    $prev = $go-1;
		    $links[] = "<a href='?go=".$prev."' title=\"Eine Seite zurueck blaettern\"> &laquo;</a>\n";
		}
		for($i = $off; $i <= ($go + $danach); $i++){ // einzelne Seitenlinks erzeugen
		  if ($i != $go){  // Link definieren            
		        $links[] = "<a href='?go=".$i."'>$i</a>\n";
		  }
		  elseif($i == $seiten) { // aktuelle Seite, ein Link ist nicht erforderlich
		        $links[] = "<span class=\"current\">[ $i ]</span>\n";
		  }
		  elseif($i == $go){ // aktuelle Seite, ein Link ist nicht erforderlich             
		        $links[] = "<span class=\"current\">[ $i ]</span>\n";
		  } // close if $i      
		}                
		if($go != $seiten){ // Link definieren => eine Seite weiter blaettern       
		    $next = $go+1;
		    $links[] = "<a href='?go=".$next."' title=\"Eine Seite weiter blaettern\"> &raquo; </a>\n";
		}       
		if($seiten - $go - $p > 0 ){ // Link definieren => Zur letzen Seite springen   
		    $last = $seiten; 
		    $links[] = "<a href='?go=".$last."' title=\"Zur letzten Seite springen\">... Letzte &raquo;</a>\n";
		}
		$start = ($go-1) * $perPage;             // Berechne den Startwert fuer die DB
		$link_string = implode(" ", $links); // Zusammenfuegen der einzelnen Links zu einem String
		
		// -------------------------------------- Seitennavigation ausgeben ----------------------------
		echo "<br><center>";
		echo "Seite ".$go." von ".$seiten."<br>";
		echo $link_string; // Ausgabe der Seitennavigation
		echo "</center><br>";
	}
}

/* ####################################################################### SEITENANZAHL MIT GFXTYP UND SERIENFILTER */

function pagemittypundserie($perPage, $table, $gfxtyp, $gfxserie){
 	if($where != ""){
		$where = "AND typ = '".$gfxtyp."'";
	}
	$serienangabe = "WHERE serie = '".$gfxserie."'";
	$select = "SELECT id FROM ".$table." ".$serienangabe." ".$where;
	$query = mysql_query($select); // DB Abfragee
	$p = "3";                                // Anzahl der Links die in der Seitenavigation ausgegeben werden
	$total = mysql_num_rows($query);        // liefert die Anzahl der Datensaetze der Abfrage
	$seiten = ceil($total / $perPage);     // Berechnet die Seitenanzahl insgesamt
	
	// ------------------------------------------------------------------------
	if($seiten > 1){
		if($_GET['go'] != "" OR !isset($_GET['go'])){
			$go = 1;
		}
		if($_GET['go'] <= 0 OR $_GET['go'] > $seiten){
			$go = 1;
		}
		else{
		    $go = mysql_real_escape_string($_GET['go']);
		}
		$links = array();
		if(($go - $p) < 1){
			$davor = $go - 1;
		}
		else{
			$davor = $p;
		}            
		if(($go + $p) > $seiten){
			$danach = $seiten - $go;
		}
		else{
			$danach = $p;
		}      
		$off = ($go - $davor);
		if ($go- $davor > 1){     
			$first = 1;
		    $links[] = "<a href='?go=".$first."&serie=".$gfxserie."' title=\"Zur ersten Seite springen\">&laquo; Erste ...</a>\n";      
		}      
		if($go != 1){          
		    $prev = $go-1;
		    $links[] = "<a href='?go=".$prev."&serie=".$gfxserie."' title=\"Eine Seite zurueck blaettern\"> &laquo;</a>\n";
		}
		for($i = $off; $i <= ($go + $danach); $i++){
		  if ($i != $go){         
		        $links[] = "<a href='?go=".$i."&serie=".$gfxserie."'>$i</a>\n";
		  }
		  elseif($i == $seiten) {
		        $links[] = "<span class=\"current\">[ $i ]</span>\n";
		  }
		  elseif($i == $go){           
		        $links[] = "<span class=\"current\">[ $i ]</span>\n";
		  }
		}                
		if($go != $seiten){  
		    $next = $go+1;
		    $links[] = "<a href='?go=".$next."&serie=".$gfxserie."' title=\"Eine Seite weiter blaettern\"> &raquo; </a>\n";
		}       
		if($seiten - $go - $p > 0 ){
		    $last = $seiten; 
		    $links[] = "<a href='?go=".$last."&serie=".$gfxserie."' title=\"Zur letzten Seite springen\">... Letzte &raquo;</a>\n";
		}
		$start = ($go-1) * $perPage;
		$link_string = implode(" ", $links);
		
		echo "<br><center>";
		if($go != 0 OR $go != ""){
			echo "Seite ".$go." von ".$seiten."<br>";	
		}
		else{
			echo "Seite 1 von ".$seiten."<br>";	
		}
		echo $link_string; // Ausgabe der Seitennavigation
		echo "</center><br>";
	}
}

/* #######################################################################  SEITENANZAHL MIT GFXTYP UND WEBBY-FILTER */

function pagemittypundwebby($perPage, $table, $gfxtyp, $webby){
	$typangabe = "WHERE typ = '".$gfxtyp."'";
	$webbyangabe = "AND webby = '".$webby."'";
	$select= "SELECT id FROM ".$table." ".$typangabe." ".$webbyangabe;
	$query = mysql_query($select); // DB Abfragee
	$p = "3";                                // Anzahl der Links die in der Seitenavigation ausgegeben werden
	$total = mysql_num_rows($query);        // liefert die Anzahl der Datensaetze der Abfrage
	$seiten = ceil($total / $perPage);     // Berechnet die Seitenanzahl insgesamt
	
	
	// ------------------------------------------------------------------------
	if($seiten > 1){
		if($_GET['go'] != "" OR !isset($_GET['go'])){
			$go = 1;
		}
		if($_GET['go'] <= 0 OR $_GET['go'] > $seiten){
			$go = 1;
		}
		else{
		    $go = mysql_real_escape_string($_GET['go']);
		}
		$links = array(); // Linkkette bilden
		// Seite die vor der aktuellen Seite kommt definieren
		if(($go - $p) < 1){
			$davor = $go - 1;
		}
		else{
			$davor = $p;
		}            
		// Seite die nach der aktuellen Seite kommt definieren
		if(($go + $p) > $seiten){
			$danach = $seiten - $go;
		}
		else{
			$danach = $p;
		}      
		$off = ($go - $davor); // Variable definieren             
		if ($go- $davor > 1){ // Link definieren => Zur Erste Seite springen         
			$first = 1;
		    $links[] = "<a href='?go=".$first."&action=sortwebby&webby=".$webby."' title=\"Zur ersten Seite springen\">&laquo; Erste ...</a>\n";      
		}      
		if($go != 1){ // Link definieren => eine Seite zurueck blaettern          
		    $prev = $go-1;
		    $links[] = "<a href='?go=".$prev."&action=sortwebby&webby=".$webby."' title=\"Eine Seite zurueck blaettern\"> &laquo;</a>\n";
		}
		for($i = $off; $i <= ($go + $danach); $i++){ // einzelne Seitenlinks erzeugen
		  if ($i != $go){  // Link definieren            
		        $links[] = "<a href='?go=".$i."&action=sortwebby&webby=".$webby."'>$i</a>\n";
		  }
		  elseif($i == $seiten) { // aktuelle Seite, ein Link ist nicht erforderlich
		        $links[] = "<span class=\"current\">[ $i ]</span>\n";
		  }
		  elseif($i == $go){ // aktuelle Seite, ein Link ist nicht erforderlich             
		        $links[] = "<span class=\"current\">[ $i ]</span>\n";
		  } // close if $i      
		}                
		if($go != $seiten){ // Link definieren => eine Seite weiter blaettern       
		    $next = $go+1;
		    $links[] = "<a href='?go=".$next."&action=sortwebby&webby=".$webby."' title=\"Eine Seite weiter blaettern\"> &raquo; </a>\n";
		}       
		if($seiten - $go - $p > 0 ){ // Link definieren => Zur letzen Seite springen   
		    $last = $seiten; 
		    $links[] = "<a href='?go=".$last."&action=sortwebby&webby=".$webby."' title=\"Zur letzten Seite springen\">... Letzte &raquo;</a>\n";
		}
		$start = ($go-1) * $perPage;             // Berechne den Startwert fuer die DB
		$link_string = implode(" ", $links); // Zusammenfuegen der einzelnen Links zu einem String
		
		// -------------------------------------- Seitennavigation ausgeben ----------------------------
		echo "<br><center>";
		echo "Seite ".$go." von ".$seiten."<br>";
		echo $link_string; // Ausgabe der Seitennavigation
		echo "</center><br>";
	}
}


/* ###################################################################### PAGE FÜR DAS FORUM */

function pageforum($perPage, $table, $themenid){
	$thema = "WHERE themen_id = '".$themenid."'";
	$select= "SELECT id FROM ".$table." ".$thema;
	
	$query = mysql_query($select); // DB Abfragee
	$p = "3";                                // Anzahl der Links die in der Seitenavigation ausgegeben werden
	$total = mysql_num_rows($query);        // liefert die Anzahl der Datensaetze der Abfrage
	$seiten = ceil($total / $perPage);     // Berechnet die Seitenanzahl insgesamt
	
	// ------------------------------------------------------------------------
	if($seiten > 1){
		if($_GET['go'] != "" OR !isset($_GET['go'])){
			$go = 1;
		}
		if($_GET['go'] <= 0 OR $_GET['go'] > $seiten){
			$go = 1;
		}
		else{
		    $go = mysql_real_escape_string($_GET['go']);
		}
		$links = array(); // Linkkette bilden
		// Seite die vor der aktuellen Seite kommt definieren
		if(($go - $p) < 1){
			$davor = $go - 1;
		}
		else{
			$davor = $p;
		}            
		// Seite die nach der aktuellen Seite kommt definieren
		if(($go + $p) > $seiten){
			$danach = $seiten - $go;
		}
		else{
			$danach = $p;
		}      
		$off = ($go - $davor); // Variable definieren             
		if ($go- $davor > 1){ // Link definieren => Zur Erste Seite springen         
			$first = 1;
		    $links[] = "<a href='?themen_id=".$themenid."&go=".$first."' title=\"Zur ersten Seite springen\" class=\"kommentare\">&laquo; Erste ...</a>\n";      
		}      
		if($go != 1){ // Link definieren => eine Seite zurueck blaettern          
		    $prev = $go-1;
		    $links[] = "<a href='?themen_id=".$themenid."&go=".$prev."' title=\"Eine Seite zurueck blaettern\" class=\"kommentare\"> &laquo;</a>\n";
		}
		for($i = $off; $i <= ($go + $danach); $i++){ // einzelne Seitenlinks erzeugen
		  if ($i != $go){  // Link definieren            
		        $links[] = "<a href='?themen_id=".$themenid."&go=".$i."' class=\"kommentare\">$i</a>\n";
		  }
		  elseif($i == $seiten) { // aktuelle Seite, ein Link ist nicht erforderlich
		        $links[] = "<div class=\"kommentare\">$i</div>\n";
		  }
		  elseif($i == $go){ // aktuelle Seite, ein Link ist nicht erforderlich             
		        $links[] = "<div class=\"kommentare\">$i</div>\n";
		  } // close if $i      
		}                
		if($go != $seiten){ // Link definieren => eine Seite weiter blaettern       
		    $next = $go+1;
		    $links[] = "<a href='?themen_id=".$themenid."&go=".$next."' title=\"Eine Seite weiter blaettern\" class=\"kommentare\"> &raquo; </a>\n";
		}       
		if($seiten - $go - $p > 0 ){ // Link definieren => Zur letzen Seite springen   
		    $last = $seiten; 
		    $links[] = "<a href='?themen_id=".$themenid."&go=".$last."' title=\"Zur letzten Seite springen\" class=\"kommentare\">... Letzte &raquo;</a>\n";
		}
		$start = ($go-1) * $perPage;             // Berechne den Startwert fuer die DB
		$link_string = implode(" ", $links); // Zusammenfuegen der einzelnen Links zu einem String
		
		// -------------------------------------- Seitennavigation ausgeben ----------------------------
		echo "<br><center>";
		echo $link_string; // Ausgabe der Seitennavigation
		echo "</center><br>";
	}
}
?>