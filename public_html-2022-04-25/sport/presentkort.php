<?php

/* Connect to db */
$pdo = new PDO('mysql:host=my108b.sqlserver.se;dbname=138261-femkamp', '138261_ha80530', 'testtest');

for($i = 0; $i < 100; $i++){
	
	$uniqueId = rand(10000, 99999);

	$stmt= $pdo->prepare("INSERT INTO `presentkort` (`id`) VALUES(?)");
	$stmt->execute(array($uniqueId));

}

?>