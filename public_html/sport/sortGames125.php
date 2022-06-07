<?php
date_default_timezone_set('Europe/Stockholm');

/* Connect to db */require_once("/home/nordic/inc/connect.php");
$openingHours = array(	"Monday" 		=> array("15", "22"),	"Tuesday" 		=> array("15", "23"),	"Wednesday" 	=> array("15", "23"),	"Thursday"		=> array("15", "23"),	"Friday" 		=> array("15", "24"),	"Saturday"	 	=> array("12", "24"),	"Sunday" 		=> array("12", "22"),);

$stmt= $pdo->prepare("SELECT `name`, `sport`, `league`, `date` FROM `matches` WHERE `date` > 1643670000 AND `date` < 1652047200 ORDER BY `date` ASC LIMIT 10000000");
$stmt->execute(array());

$games = $stmt->fetchAll();

$output = array();
function checkStringArray($string, $array){		foreach($array as $element){				if(stristr($string, $element)){						return true;					}			}		return false;	}$dateValues = array();$nullValue = array("women", "women", "kvinnor");$highValue = array("liverpool", "manchester united", "manchester city", "barcelona", "real madrid", "ifk göteborg", "frölunda", "arsenal", "juventus", "tottenham");
foreach($games as $game){		/* Check if open */	$gameWeekday = date('l', $game['date']);	$gameStartHour = date('H', $game['date']);	$gameEndHour = date('H', $game['date'] + 7200);		if($openingHours[$gameWeekday][0] <= $gameStartHour && $openingHours[$gameWeekday][1] >= $gameEndHour && $gameStartHour < $gameEndHour){	}	else{				//echo "Not showing {$game['name']} due to opening hours - gs: $gameStartHour - ge: $gameEndHour - o: {$openingHours[$gameWeekday][0]} - c: {$openingHours[$gameWeekday][1]}\n";		continue;			}
	/* Get the date */	$date = date('Y-m-d', $game['date']);	$hour = gmdate("H:i", $game['date']);	/* Determine game value */	if(!isset($dateValues[$date]['value'])){				$dateValues[$date]['value'] = 0;		}		if(checkStringArray($game['name'], $highValue)){				$dateValues[$date]['value'] = $dateValues[$date]['value'] + 1;			}		if(checkStringArray($game['name'], $nullValue) || checkStringArray($game['league'], $nullValue)){				$value = 0;			}		$output[$date][] = $game['name'] . " ||| " . $game['league'] . " ||| " . $hour;
	
}var_dump($dateValues);var_dump($output);/* Line dumpforeach($dateValues as $d){		$f = $d['value'];		echo "$f	";	}*/

?>