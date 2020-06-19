<?php

	include("connect.php");
	
	if(isset($_POST['st_id']) && isset($_POST['st_status'])){
		
		$update_manualStatus = "update streetlight set st_status =".$_POST['st_status']." where st_id='".$_POST['st_id']."'";
		//echo $update_manualStatus;
		
		mysqli_query($con,$update_manualStatus);
	}
?>