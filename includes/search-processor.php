<?php

//Localhost
//$host = 'localhost';
//$dbname   = 'destinationGo';
//$user = 'root';
//$pass = 'root';
//$charset = 'utf8';
//$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
//$opt = [
//    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_EMULATE_PREPARES   => false,
//];

$host = 'yujua.dev.fast.sheridanc.on.ca';
$dbname   = 'yujua_destinationgo';
$user = 'yujua_guest';
$pass = 'X5N6N@xUpYa_';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $db = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $error) {
    echo "ERROR: ".$error->getMessage();
}

$weather = $_POST['weather'];
$activity = $_POST['activity'];
$cost = $_POST['cost'];
$location = $_POST['location'];
$family = $_POST['family'];
$popularity = $_POST['popularity'];

$sql = "SELECT `d`.`name`,
`d`.`pictures`,
`w`.`name` as `weather`,
`c`.`name` as `cost`,
`f`.`name` as `family`,
`l`.`name` as `location`,
`a`.`name` as `activity`,
`p`.`name` as `popularity`
FROM `destinations` AS `d`
INNER JOIN `weather` AS `w` ON ( `d`.`wid`= `w`.`wid` )
INNER JOIN `cost` AS  `c` ON ( `d`.`cid` = `c`.`cid` )
INNER JOIN `family` AS  `f` ON ( `d`.`fid` = `f`.`fid` )
INNER JOIN `location` AS  `l` ON ( `d`.`lid` = `l`.`lid` )
INNER JOIN `activity` AS  `a` ON ( `d`.`aid` = `a`.`aid` )
INNER JOIN `popularity` AS  `p` ON ( `d`.`pid` = `p`.`pid` ) WHERE TRUE";

if (isset($weather)) {
	$sql .= " AND `w`.`name` LIKE :weather";
}

if (isset($activity)) {
	$sql .= " AND `a`.`name` LIKE :activity";
}

if (isset($cost)) {
	$sql .= " AND `c`.`name` LIKE :cost";
}

if (isset($location)) {
	$sql .= " AND `l`.`name` LIKE :location";
}

if (isset($family)) {
	$sql .= " AND `f`.`name` LIKE :family";
}

if (isset($popularity)) {
	$sql .= " AND `p`.`name` LIKE :popularity";
}

$query = $db->prepare( $sql );

if (isset($weather)) {
	$query->bindParam( ':weather', $weather );
}

if (isset($activity)) {
	$query->bindParam( ':activity', $activity );
}

if (isset($cost)) {
	$query->bindParam( ':cost', $cost );
}

if (isset($location)) {
	$query->bindParam( ':location', $location );
}

if (isset($family)) {
	$query->bindParam( ':family', $family );
}

if (isset($popularity)) {
	$query->bindParam( ':popularity', $popularity );
}

$query->execute();

$data = $query->fetchAll();

// debug function
function dump($el)
{
    echo "<pre><div style='text-align=left';>";
    var_dump($el); 
    echo "</pre></div>";
}

//dump($data);

global $destination, $picture;

$destination = $data[0][0];
$picture = $data[0][1];

//echo $destination;
//echo $picture;

?>