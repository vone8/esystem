<?php
include_once('./includes/config.php');

	if(isset($_POST['firm-register'])){
		if(empty($_POST['firm-name']) && empty($_POST['firm-date']) && empty($_POST['firm-pan']) && empty($_POST['firm-gst']) && empty($_POST['firm-address']) && empty($_POST['firm-email']) && empty($_POST['firm-contact']) && empty($_POST['firm-type'])){
			alert("Please enter require inputs");
		}else{
			$ID = $_SESSION['ID'];
			$firmname=$_POST['firm-name'];
	        $firmdate=$_POST['firm-date'];
	        $firmpan=$_POST['firm-pan'];
	        $firmgst=$_POST['firm-gst'];
	        $firmsex=$_POST['flexRadioDefault'];
	        $firmaddress=$_POST['firm-address'];
	        $firmemail=$_POST['firm-email'];
	        $firmcontact=$_POST['firm-contact'];
	        $firmtype=$_POST['firm-type'];
	        
	        $msg=mysqli_query($con,"insert into eff_firm(`firm_name`, `firm_date`, `firm_sex`, `firm_pan`, `firm_address`, `firm_gst`, `firm_type`, `firm_email`, `firm_contact`, `user_id`, `firm_status`) values('$firmname','$firmdate','$firmsex','$firmpan','$firmaddress', '$firmgst', '$firmtype', '$firmemail', '$firmcontact','$ID',1)");

            if($msg){
                echo "<script>alert('Registered successfully');</script>";
                echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
            }

		}
	}

?>