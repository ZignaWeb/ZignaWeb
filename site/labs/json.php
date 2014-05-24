<?
$txt = "Texto";
$array = array("uno","dos","tres");
$arrayMD = array (
	nivel1 => array("uno","dos"), 
	nivel2 => array("tres","cuatro")
);
echo json_encode ($txt);
echo json_encode ($array);
echo json_encode ($arrayMD);

?>