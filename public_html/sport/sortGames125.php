<?php



$openingHours = array(

$stmt= $pdo->prepare("SELECT `name`, `sport`, `league`, `date` FROM `matches` WHERE `date` > 1643670000 AND `date` < 1652047200 ORDER BY `date` ASC LIMIT 10000000");
$stmt->execute(array());

$games = $stmt->fetchAll();

$output = array();
function checkStringArray($string, $array){
foreach($games as $game){
	/* Get the date */
	
}

?>