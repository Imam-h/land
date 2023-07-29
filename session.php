



<?php
session_start();
if (isset($_SESSION['uid'])){
$ses_id = $_SESSION['uid'];

}else if(isset($_SESSION['sid'])){
	$ses_id = $_SESSION['sid'];
}else{
header('location:index.php');
	
}

?>