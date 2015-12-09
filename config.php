<?php

$cfg["dirUrlPrefix"] 	 = "/";
$cfg["useAnalytics"] 	 = true;    
$cfg["documentRoot"] 	 = "";      
$cfg["documentRootFull"] = "";      
$cfg["siteName"] 		 = "otthonodert.hu";
$cfg["siteNameFancy"]    = "otthonodert";


/**
* @var string Az egész oldal címét tartalmazza
*/
$cfg["host"]         = "http://hpeti.opnet.hu/csehlaci/";

/**
* @var string Az oldal adminisztrátorának email címe
*/

$cfg["email"]        = "";
//$cfg["email"]        = "";


/**
* @var string Megadja, hogy debug mode-ban vagyunk e
*/

$cfg["debug"]        = false;
if( isset($_COOKIE["debug"]) ) { $cfg["debug"] = true; }





//---------------------------------------------------------------



header("Content-type: text/html; charset=utf-8");
if ($cfg["debug"]) {
  ini_set("display_startup_errors", "on");
  ini_set("display_errors", "on");
  ini_set("error_reporting", E_ALL);
  ini_set("error_log", "./logs/error.log");
}
ini_set("session.use_cookies", "on");
ini_set("session.gc_maxlifetime", 5400); // 1.5 óráig él a session
//header('P3P: CP="CAO PSA OUR"');

//session_start();



?>