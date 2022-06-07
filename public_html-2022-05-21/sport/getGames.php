<?php
header("Content-Type: application/json; charset=UTF-8");

/* Define opening hours */
$openingHours = array(

	"Monday" 		=> array("15", "22"),
	"Tuesday" 		=> array("15", "23"),
	"Wednesday" 	=> array("15", "23"),
	"Thursday"		=> array("15", "23"),
	"Friday" 		=> array("15", "24"),
	"Saturday"	 	=> array("12", "24"),
	"Sunday" 		=> array("12", "22"),

);
/* Connect to db */require_once("/home/nordic/inc/connect.php");


$stmt= $pdo->prepare("SELECT `name`, `sport`, `league`, `date` FROM `matches` WHERE `date` > ? ORDER BY `date` DESC");
$stmt->execute(array(time()));

$games = $stmt->fetchAll();

$output = array();

foreach($games as $game){
	
	$swedish = false;
	$important = false;
	
	/* Check game date */
	$gameWeekday = date('l', $game['date']);
	$gameStartHour = date('H', $game['date']);
	$gameEndHour = date('H', $game['date'] + 7200);

	if($openingHours[$gameWeekday][0] <= $gameStartHour && $openingHours[$gameWeekday][1] >= $gameEndHour && $gameStartHour < $gameEndHour){
		
	}
	
	else{
		
		//echo "Not showing {$game['name']} due to opening hours - gs: $gameStartHour - ge: $gameEndHour - o: {$openingHours[$gameWeekday][0]} - c: {$openingHours[$gameWeekday][1]}\n";
		continue;
		
	}
	
	if(
		stristr($game['name'], "frölunda") ||
		stristr($game['name'], "blåvitt") ||
		stristr($game['name'], "ifk göteborg") ||
		stristr($game['league'], "champions league")
	){
		
		$important = true;
		
	}
	
	if(
		stristr($game['name'], "sweden") ||
		stristr($game['name'], "sverige")
	){
		
		$swedish = true;
		
	}
	
	$output[] = array(
	
			"name" => $game['name'],
			"sport" => $game['sport'],
			"date" => $game['date'],
			"league" => $game['league'],
			"swedish"	=> $swedish,
			"important" => $important
		
		);
	
}
	

echo json_encode($output);

?>