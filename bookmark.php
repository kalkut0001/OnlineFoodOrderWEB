<?php  

include("includes/dbhelper.php");
include("includes/sessionhandler.php");

$user_id = $_SESSION['user_id'];
$res_id = $_GET['res_id'];

$query = "INSERT INTO bookmarks VALUES(NULL, $res_id, $user_id)";

if(mysqli_query($conn, $query)){
	echo 1;
}else{
	echo 0;
}

?>