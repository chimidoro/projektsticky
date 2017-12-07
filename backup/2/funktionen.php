<?php
	function exist($abfrage) {
		$ergebnis3 = mysql_query("SELECT id FROM ".$abfrage);
		if (mysql_fetch_object($ergebnis3)) {
			return true;
		}
		else {
			return false;
		}
	}
	function random($anzahl,$nurb=false) {
	    if($nurb) {
	        $alle = "ABCDEFGHJKLMNPRSTUVWXYZ";
	    } else {
	        $alle = "ABCDEFGHJKLMNPRSTUVWXYZ123456789";
	    }
	    $str = "";
	    while(strlen($str) < $anzahl) {
	        $str = $str.substr($alle,rand(0,(strlen($alle)-1)),1);
	    }
	    return($str);
    }
	function wert($abfragez,$value) {
		$abfrage = "SELECT ".$value." AS value FROM ".$abfragez." LIMIT 0,1";
		$ergebnis = mysql_query($abfrage);
		$row = mysql_fetch_array($ergebnis);
		return $row['value'];
	}
	function anzahl($abfragez) {
		$ergebnis = mysql_query("SELECT COUNT(*) AS anzahl FROM ".$abfragez);
		$row = mysql_fetch_array($ergebnis);
		return $row['anzahl']; 
	}
	function refresh($user) {
		$update = mysql_query("UPDATE benutzer SET refresh = '".time()."' WHERE id = '".$user."'"); 
	}
	function endung($filename) {
		$end = explode(".",$filename);
		return ".".$end[(count($end)-1)];
	}
	function save($text){
		$textnew = mysql_real_escape_string($text);
		return $textnew;
	}
	function smilies() {
		$a = 0;
		$pro = 9;
		$abfrage = "SELECT * FROM smilies ORDER BY id";
		$ergebnis = mysql_query($abfrage);
		while($row = mysql_fetch_object($ergebnis)){
			if($a%$pro == 0 && $a != 0) {
				$s = $s."<br>";
			}
			$s.= "<a onclick=\"smilie('".$row->code."')\"><img src=\"smilies/".$row->id."".$row->endung."\" border=0></a>&nbsp;";
			$a++;
		}
		$smilies = $s;
		return $smilies;
	}
?>