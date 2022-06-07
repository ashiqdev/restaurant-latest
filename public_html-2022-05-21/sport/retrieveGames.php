<?php

/* Connect to db */
require_once("/home/nordic/inc/connect.php");

$pageData = file_get_contents("http://nordicsportsbar.se.websupportpreview.net/control5/index.php");

$lines = explode("\n", $pageData);

/* Declare states */
$matchData = array();

$matchName = '';
$activeDate = '';
$time = '';
$sport = '';
$league = '';

$liOpen = 0;

foreach($lines as $line){
	
	if(stristr($line, "<li ")){
		
		$liOpen = 1;
		
	}
	
	if($liOpen == 1){
		
		/* Get the date */
		if(stristr($line, "data-hash")){
			
			$date = explode('data-hash="', $line)[1];
			$date = explode('"', $date)[0];
			
			$activeDate = $date;
			
		}
		
		/* Get the time */
		if(stristr($line, "<time>")){
			
			$time = explode("<time>", $line)[1];
			$time = explode("</time>", $time)[0];
			$time = trim($time);
			
		}
		
		/* Get the sport */
		if(stristr($line, "data-match=")){
			
			$sport = explode('class="', $line)[1];
			$sport = explode(' ', $sport)[2];
			$sport = ucfirst(trim($sport));
			
		}
		
		/* Get the match */
		if(stristr($line, "/match/") && stristr($line, "<h3")){
			
			$matchName = explode("<a ", $line)[1];
			$matchName = explode(">", $matchName)[1];
			$matchName = explode("<", $matchName)[0];
			$matchName = html_entity_decode($matchName);
			$matchName = trim($matchName);
			
		}
		
		if(stristr($line, 'class="league"')){
			
			$league = explode("</a>", $line)[0];
			$league = explode(">", $league)[1];

		}
		
	}
	
	if(stristr($line, "</li>")){

		if(!$matchName || !$sport || !$time || !$activeDate || !$league){
			
			continue;
			
		}
		
		$timestamp = strtotime("{$activeDate} {$time}");
		
		$hour = intval(trim(explode(":", $time)[0]));
		
		if($hour < 5){
			
			$timestamp = $timestamp + 86400;
			
		}
		
		$stmt= $pdo->prepare("INSERT INTO `matches` (`name`, `date`, `sport`, `league`) VALUES(?, ?, ?, ?)");
		$stmt->execute(array($matchName, $timestamp, $sport, $league));
		
		echo "$matchName | $sport | $time | $activeDate | $league\n";
		
		$matchName = '';
		$time = '';
		$sport = '';
		
		$liOpen = 0;
		
	}
	
}

?>