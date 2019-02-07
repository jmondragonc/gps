<?php
function getParam($vparam, $vdefault) {
	$result = $vdefault;
	if (isset($vparam)) {
  		$result = (get_magic_quotes_gpc()) ? $vparam : addslashes($vparam);
	}
	return $result;
}
function getMetaDescription($text) {
	$text = str_replace("\"", "", $text);
	$text = strip_tags($text);
	$text = trim($text);
	$text = substr($text, 0, 247);
	return $text."...";
}
function getSQL($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") {
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
function formatTime($time) {
	$min = floor($time/60);
	$sec = $time%60;
	return num2digit($min).":".num2digit($sec)." min";
}
function num2digit($num) {
	if ($num<10) {
		$num = "0".$num;	
	}
	return $num;
}
function datefix($fmt, $zone = -5) {
    return date($fmt, time() - date("Z") + $zone*3600); 
}
function formatDate($date) {
	$adate = explode("T", $date);
	return date("M d, Y", strtotime($adate[0]));	
}
?>