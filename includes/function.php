<?php
//include_once('config.php');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$ret= mysqli_query($con,"SELECT * FROM eff_users WHERE ID='$ID'");
    $num=mysqli_fetch_array($ret);
    

function get_user_type($id){
	$ID = $_SESSION['ID'];
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$ret= mysqli_query($con,"SELECT * FROM eff_users WHERE ID='$ID'");
    $num=mysqli_fetch_array($ret);
    return $num['user_type'];
}
?>