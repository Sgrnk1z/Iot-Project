<?php
	include("connect.php");
	
	if(isset($_REQUEST['st_id']) and isset($_REQUEST['status'])){
		if($_REQUEST['status'] == "On"){
		    
			//updatte status of streetlight
			$update_status_q = "update streetlight set st_status=1 where st_id='".$_REQUEST['st_id']."'";
		
		}
		else{
			
			//updatte status of streetlight
			$update_status_q = "update streetlight set st_status=0 where st_id='".$_REQUEST['st_id']."'";	
			
		}
		//echo $update_status_q;
		$execute_q = mysqli_query($con,$update_status_q);
	}
?>