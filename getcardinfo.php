<?php

$host = "localhost";

$dbuser = "db_username";

$dbpass = "db_password";

$dbname = "db_name";

$link = mysqli_connect($host, $dbuser, $dbpass, $dbname);

$card = $_GET['c'];

$the_orientation = $_GET['o'];

if ($the_orientation == "upright"){

    $orientation = 1;

} else {

    $orientation = 2;

}

$sql = "select * from deck where name like '$card' and orientation = $orientation";

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_assoc($result);

$meaning = $row['meaning'];

echo ("<h1>$card - $the_orientation</h1>$meaning");

?>

