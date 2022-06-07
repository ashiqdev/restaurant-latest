<?php
header("Content-Type: application/json; charset=UTF-8");sleep(rand(1,2));
$giftcardNumber = $_GET['id'];
if(!$giftcardNumber || !is_numeric($giftcardNumber) || strlen($giftcardNumber) != 5){
	echo json_encode(array("error" => "invalid"));
	exit;
}
/* Connect to db */require_once("/home/nordic/inc/connect.php");
/* Ratelimit */$stmt= $pdo->prepare("SELECT count(*) as `instances` FROM `ratelimit` WHERE `ip` = ? AND `date` > ? LIMIT 1");$stmt->execute(array($_SERVER['REMOTE_ADDR'], time() - 3600));$instances = $stmt->fetch();if($instances[0] > 15){		echo json_encode(array("error" => "ratelimit"));	exit;	}
$stmt= $pdo->prepare("INSERT INTO `ratelimit` (`ip`, `action`, `date`) VALUE(?, ?, ?)");
$stmt->execute(array($_SERVER['REMOTE_ADDR'], "checkGiftcard", time()));
/* Check giftcard */
$stmt= $pdo->prepare("SELECT `value`, `friskvard`, `date` FROM `presentkort` WHERE `id` = ? LIMIT 1");
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

$presentkortsInfo = array(	"success" => "activated",	"value" => $presentkort['value'],	"friskvard" => $presentkort['friskvard'],	"expiryDate" => date('Y-m-d', $expiryDate));
echo json_encode($presentkortsInfo);

?>