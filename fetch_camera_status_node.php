<?php
	include("connect.php");
	
	if(isset($_POST['postData'])){
	    
		$get_street_id = "select st_id from streetlight where camera_id in (select camera_id from camera where motion_status=1)";
		$execute_get_street_id = mysqli_query($con,$get_street_id);
		while($res = mysqli_fetch_array($execute_get_street_id)){
			echo $res['st_id'];
		}
	}
	
?>