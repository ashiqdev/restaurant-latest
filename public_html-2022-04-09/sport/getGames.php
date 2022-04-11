<?php
/* Connect to db */$pdo = new PDO('mysql:host=my108b.sqlserver.se;dbname=138261-femkamp', '138261_ha80530', 'testtest');echo "here";
exit;

$stmt= $pdo->prepare("SELECT `name`, `sport`, `league`, `date` FROM `matches` WHERE `date` > ? ORDER BY `date` DESC");
$stmt->execute(array(time()));

$games = $stmt->fetchAll();

$output = array();

foreach($games as $game){
	echo "$game | day " . date('l', strtotime($game['date'])). "\n";	continue;
	$swedish = false;
	$important = false;
	
	if(
		stristr($game['name'], "frölunda") ||
		stristr($game['name'], "blåvitt") ||
		stristr($game['name'], "ifk göteborg")
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