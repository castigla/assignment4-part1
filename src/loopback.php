<?php
error_reporting(E_All);
ini_set('display_errors', 1);


$arrayKeyValues =array();

foreach ($_GET as $key => $value) {

	$arrayKeyValues[$key] = $value;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$arrayget = array("Type" => "GET", "parameters" => $arrayKeyValues);
	echo json_encode($arrayget);
}

foreach ($_POST as $key => $value) {
	$arrayKeyValues[$key] = $value;

}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$arraypost = array("Type" => "POST", "parameters" => $arrayKeyValues);
	echo json_encode($arraypost);
}

?>