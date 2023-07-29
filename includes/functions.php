<?php function clean($data) {
	global $conn;
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = htmlentities($data);
 $data = mysqli_real_escape_string($conn,$data);
  return $data;
}

function promotion($score){
		$scores = (int)($score/10);
	switch ($scores) {
		case 10:
		case 9:
		case 8:
		case 7:
		case 6:
		case 5:
		case 4:
		
			$promotion= "PROMOTED";

			break;
		
		default:
			$promotion="NOT PROMOTED";
			
	}
	return $promotion;
}
function grade($score){
		$scores = (int)($score/10);
	switch ($scores) {
		case 10:
		case 9:
		case 8:
		case 7:
			$grade= "A";

			break;
		case 6:
			$grade= "B";
			break;
		case 5:
			$grade="C";
			break;
		case 4: 
			$grade= "D";
			break;
			case 0: 
			$grade= "-";
			break;
		default:
			$grade="F";
			
	}
	return $grade;
}
function points($score){
		$scores = (int)($score/10);
	switch ($scores) {
		case 10:
		case 9:
		case 8:
		case 7:
			$points= 5;

			break;
		case 6:
			$points= 4;
			break;
		case 5:
			$points= 3;
			break;
		case 4: 
			$points= 2;
			break;
			case 3: 
			case 2: 
			case 1: 
			case 0: 
			$points = 0;
			break;
		default:
			$points= "-";
			break;
			
	}
	return $points;
}

function gp($a,$b){
	return $a*$b;
}
function cgp($a,$b){
	return $a/$b;
}


// date validation
$date = 'Y-m-d';
$currentDate= date($date);
/// criminal DOB

$minD=strtotime("-3 years");
$max=strtotime("-7 years");
$min = Date($date,$minD);
 // DATE COMMITECD A CRIME
$mincom= strtotime("-3 year");
$minC = date($date, $mincom);



function validate($string){

$pos = strpos($string, '@');
 $poss = strpos($string, '.');
$mail= substr($string, $pos, 6);
$com= substr($string, $poss);
 


 // $mail==array('@gmail','@yahoo');
  $gm='@gmail';
 $y = '@yahoo';
if((($mail ==$gm) || ($mail== $y) ) && ($com=='.com')){
	//return ($string);
	 echo "<script>alert ($string.'<br>  is a valid email') </script>";
	
}else {
	 echo "<script>alert ($string.'<br>  is a invalid email') </script>";

}

}

function valid($string){

$pos = strpos($string, '@');
 $poss = strpos($string, '.');
 $mail= substr($string, $pos, -4);
$com= substr($string, $poss);
  $gm='@gmail';
 $y = '@yahoo';
if(($mail == $gm || $mail ==$y  && $com =='.com')){
return $string;
	
}else {
	echo  '<script> alert("invalid email")';
}

}

function fomDate($dat){
	$date=date_create($dat);
$dat = date_format($date,"D  M  d  Y  ");
return($dat);

}
function rem($currDate, $dateStart ){

	$date2=date_create("$currDate");
$date1=date_create("$dateStart");
$diff=date_diff($date1,$date2, true);
$remaining = $diff->format("%y years %m months %d days ");
return $remaining;

	# code...

}

Function compareDate($pre , $post)
{
	$pre=strtotime($pre);
	$post = strtotime($post);
if ($pre<$post) {
	return true;
	# code...
}else{
	return false;
}
// current  if current is 
// started
// released
	# code...
}
// rem($datex, $date );
$curDate = date("Y-m-d");

// SPECIAL VARIABLES
?>