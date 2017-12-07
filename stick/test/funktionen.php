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

	function save($text){
		$textnew = mysql_real_escape_string($text);
		return $textnew;

	}
?>