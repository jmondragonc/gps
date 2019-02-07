<?php
// --------------------------------
// UTMS Class
// Need MySQL connection ($cnx)
// 
// BASIC ***
// http://google.com/?utm_source=source&utm_medium=medium&utm_term=term&utm_content=content&utm_campaign=campaign 
// 
// Facebook Pagetab ***
// http://www.facebook.com/2webfacil/app_271943936264140?app_data=utm_source%3Dsource%26utm_medium%3Dmedium%26utm_content%3Dcontent%26utm_campaign%3Dcampaign
// --------------------------------

class UTMS {
	public $utm_source;
	public $utm_medium;
	public $utm_content;
	public $utm_campaign;
	public $utm_term;
	
	private $prefix;
	
	function __construct($prefix = DB_PREFIX) {
		$this->utm_source = $this->getParam($_GET['utm_source']);
		$this->utm_medium = $this->getParam($_GET['utm_medium']);
		$this->utm_content = $this->getParam($_GET['utm_content']);
		$this->utm_campaign = $this->getParam($_GET['utm_campaign']);
		$this->utm_term = $this->getParam($_GET['utm_term']);
		$this->prefix = $prefix;
	}
	public function useSignedRequest() {
		$fbdata = $this->parseSignedRequest();
                
		if ($fbdata["app_data"] != "") {
			parse_str($fbdata["app_data"], $get);
                           
                        
                        
			$this->utm_source = $this->getParam($get['utm_source']);
			$this->utm_medium = $this->getParam($get['utm_medium']);
			$this->utm_content = $this->getParam($get['utm_content']);
			$this->utm_campaign = $this->getParam($get['utm_campaign']);
			$this->utm_term = $this->getParam($get['utm_term']);
		}
	}
	public function registerVisit() {
		global $cnx;
		if (!isset($_COOKIE[$this->prefix."_visit"])) {
			if ($this->utm_source != "" && $this->utm_medium != "" && $this->utm_campaign != "") {
				// save on DB
				$cnx->execute(sprintf("INSERT INTO %s_utms (utm_source, utm_medium, utm_content, utm_campaign, utm_term, ip, fecha) VALUES (%s, %s, %s, %s, %s, %s, NOW())",
										$this->prefix, 
										$this->getSQL($this->utm_source, "text"),
										$this->getSQL($this->utm_medium, "text"),
										$this->getSQL($this->utm_content, "text"),
										$this->getSQL($this->utm_campaign, "text"),
										$this->getSQL($this->utm_term, "text"),
										$this->getSQL($_SERVER['REMOTE_ADDR'], "text")));
				// set cookie
				setcookie($this->prefix."_visit", "1", time()+3600*24);
                                setcookie('box_facebook_2016_source',$this->utm_source, time()+3600*24);
                                setcookie('box_facebook_2016_medium',$this->utm_medium, time()+3600*24);
                                setcookie('box_facebook_2016_campaign',$this->utm_campaign, time()+3600*24);
                                setcookie('box_facebook_2016_term',$this->utm_term, time()+3600*24);
                                setcookie('box_facebook_2016_content',$this->utm_content, time()+3600*24);
			}
		}
	}
	public function serialize() {
		return 'utm_source='.$utm_source.'&'.'utm_medium='.$utm_medium.'&'.'utm_content='.$utm_content.'&'.'utm_campaign='.$utm_campaign.'&'.'utm_term='.$utm_term;	
	}
	private function getParam($param) {
		$result = "";
		if (isset($param)) {
			$result = (get_magic_quotes_gpc()) ? $param : addslashes($param);
		}
		return $result;
	}
	private function getSQL($theValue, $theType) {
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
		}
		return $theValue;
	}
	private function parseSignedRequest() {
		$signed_request = $_REQUEST["signed_request"];
		
		list($encoded_sig, $payload) = explode('.', $signed_request, 2); 
		$sig = $this->base64UrlDecode($encoded_sig);
		$data = json_decode($this->base64UrlDecode($payload), true);
		return $data;
	}
	private function base64UrlDecode($url) {
		return base64_decode(strtr($url, '-_', '+/'));
	}
}
?>