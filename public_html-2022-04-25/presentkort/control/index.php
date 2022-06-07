<?php

header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

header("Content-Type: application/json; charset=UTF-8");

sleep(rand(4, 10));

$giftcardNumber = $_GET['id'];

if(!$giftcardNumber || !is_numeric($giftcardNumber) || strlen($giftcardNumber) != 5){
	
	echo json_encode(array("error" => "invalid"));
	exit;
	
}

/* Connect to db */
$pdo = new PDO('mysql:host=my108b.sqlserver.se;dbname=138261-femkamp', '138261_ha80530', 'testtest');

/* Ratelimit */
$stmt= $pdo->prepare("INSERT INTO `ratelimit` (`ip`, `action`) VALUE(?, ?)");
$stmt->execute(array($_SERVER['REMOTE_ADDR'], "checkGiftcard"));

/* Check giftcard */
$stmt= $pdo->prepare("SELECT `value`, `date` FROM `presentkort` WHERE `id` = ? LIMIT 1");
$stmt->execute(array($giftcardNumber));

$presentkort = $stmt->fetch();

$expiryDate = $presentkort['date'] + 63072000;

if($presentkort['date'] < 1){
	
	echo json_encode(array("error" => "invalid"));
	exit;
	
}

if(time() > $expiryDate){
	
	echo json_encode(array("error" => "expired"));
	exit;
	
}

$presentkortsInfo = array("success" => "activated", "value" => $presentkort['value'], "expiryDate" => date('Y-m-d', $expiryDate));
echo json_encode($presentkortsInfo);

?>