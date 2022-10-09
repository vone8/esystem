<?php 
	include_once('./includes/config.php');
	if(isset($_POST['organization-submit'])){
		if(empty($_POST['organization-group']) && empty($_POST['organization-name']) && empty($_POST['organization-email']) && empty($_POST['organization-contact'])){
			echo "<script>alert('Registered successfully');</script>";
		}else{
			$organizationgroup = $_POST['organization-group'];
			$organizationname = $_POST['organization-name'];
			$organizationemail = $_POST['organization-email'];
			$organizationcontact = $_POST['organization-contact'];
			$organizationselect = $_POST['organization-select'];
	        
	        $msg=mysqli_query($con,"INSERT INTO `eff_organization`(`organization-group`, `organization-name`, `organization-email`, `organization-contact`, `organization-select`) VALUES ('$organizationgroup','$organizationname','$organizationemail','$organizationcontact','$organizationselect')");
	        

            if($msg){
                echo "<script>alert('Registered successfully');</script>";
                echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
            }else{
            	echo "<script>alert('Not Registered Data Successfully');</script>";
            }

		}
		
	} 
?>