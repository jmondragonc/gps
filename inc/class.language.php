<?php
require("keywords.php");

class Language {
	var $name;
	var $code;
	var $id;
	var $pathabs;
	var $prefix;
	
	function Language() {
		$this->code = "es";
		$this->name = "Español";
		$this->id = 0;
		$this->pathabs = PATHABS;
		
		if ($_COOKIE["lang"] == "en") {
			$this->code = "en";
			$this->name = "English";
			$this->id = 1;
			$this->pathabs = PATHABS."en/";
		}
		
		if ($_GET["lang"] == "en") {
			$this->code = "en";
			$this->name = "English";
			$this->id = 1;
			$this->pathabs = PATHABS."en/";
		}	
	}
	function setLang($newlang) {
		if ($newlang == "en") {
			$this->code = "en";
			$this->name = "English";
			$this->id = 1;
			$this->pathabs = PATHABS."en/";
		} 
		if ($newlang == "es") {
			$this->code = "es";
			$this->name = "Español";
			$this->id = 0;
			$this->pathabs = PATHABS;
		}
	}
	function word($key) {
		global $LANG;
		return $LANG[$key][$this->id];
	}
}
?>
