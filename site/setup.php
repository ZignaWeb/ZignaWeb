<?
$live=1;
if($live==1){
	$base_url = "http://www.zigna.com.ar/";
}else{
	$base_url = "http://localhost/zigna/";
}
/*
$host = "http://".$_SERVER["HTTP_HOST"];
$page = $_SERVER["REQUEST_URI"];
$curUrl = "$host$page";
if (!isset($lang)) {$lang="es";}


function changeLang ($cual) {
	global $host;
	global $curUrl;
	$patron[0]="#(zigna.com.ar\/[a-z]{2}\/)#";
	$replace[0]="zigna.com.ar/$cual/";
	return preg_replace($patron,$replace,$curUrl);
}
*/

function getGET(){
	$gets=array();
	foreach($_GET as $key => $val){
		$gets[$key]["www"]=htmlentities(strip_tags($val));
		$gets[$key]["sql"]=addslashes($val);
	}
	return $gets;
}
?>