<?php
include_once('config.php');

function get_user_type($id){
	$ID = $_SESSION['ID'];
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$ret= mysqli_query($con,"SELECT * FROM eff_users WHERE ID='$ID'");
    $num=mysqli_fetch_array($ret);
    return $num['user_type'];
}

/**
** Organizatio Get Data By ID
*/
if(isset($_POST['action']) && !empty($_POST['action']) && $_POST['action'] == "get_organizations_data_by_id") {
	$response = array();
	$ID = $_REQUEST['ID'];

	$ret= mysqli_query($con,"SELECT * FROM eff_organization WHERE ID='$ID'");
    $nums=mysqli_fetch_array($ret);
   
    echo json_encode($nums);
}

/**
** Organization Data Delete By ID
*/

if(isset($_POST['action']) && !empty($_POST['action']) && $_POST['action'] == "delete_organizations_data_by_id") {
	$response = array();
	$ID = $_REQUEST['ID'];

	$sql = "DELETE FROM eff_organization WHERE ID= '".$ID."'";

	if ($con->query($sql) === TRUE) {
	  $response['status'] = true;
	} else {
	  $response['status'] = false;
	}

	echo json_encode($response);
}




?>