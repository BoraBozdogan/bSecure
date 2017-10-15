<?php

/*
 @ Author : Bora BOZDOĞAN
*/

class bSecure {
	
	
	public function xss($i) {
		$i = strip_tags($i);
		$i = stripslashes($i);
		$i = htmlspecialchars($i);
		$i = nl2br($i);
		return $i;
	}
	
	public function id($i) {
		$i = intval($i);
		return $i;
	}
	
	public function harf($i) {
		$i = strip_tags(stripslashes($i));
		$i = preg_replace('/[^a-z-A-ZÇİĞÖŞÜçığöşü]/', '', $i);
		return $i;
	}
	
	public function harf_rakam($i) {
		$i = strip_tags(stripslashes($i));
        $i = preg_replace('/[^a-z-A-Z-0-9ÇİĞÖŞÜçığöşü_]/', '', $i);
		return $i;
	}
	
	public function url($i) {
		$i = strip_tags(stripslashes($i));
		$i = filter_var($i, FILTER_VALIDATE_URL);
		
		if(empty($i)) {
			die("$i bir url değil!");
		}
	}
	
	public function html($i) {
		$i = addslashes($i);
		return $i;
	}
}
