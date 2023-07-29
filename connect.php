



<?php
$local= 'localhost';
$user = 'root';
$pass= '';
$db= 'land';
$conn = mysqli_connect($local,$user, $pass, $db);
if ($conn) {
	
}else{
	die(mysqli_error($conn));
}

// date validation
$date = 'Y-m-d';
$currentDate= date($date);
/// criminal DOB

$minD=strtotime("-18 years");
$max=strtotime("-60 years");
$min = Date($date,$minD);
 // DATE COMMITECD A CRIME
$mincom= strtotime("-1 year");
$minC = date($date, $mincom);


?>
