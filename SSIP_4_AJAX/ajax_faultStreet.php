<?php
	include("connect.php");
	if(isset($_REQUEST['camera_id']) || isset($_REQUEST['sensor_id'])){
		
		if(isset($_REQUEST['camera_id']) != "" ){
			//fetch streetlight detail according to camera
			$fetch_steetlight_q = "select * from streetlight where camera_id = '".$_REQUEST['camera_id']."'";
			//echo $fetch_steetlight_q; 		
			
		}else{
			$fetch_steetlight_q = "select * from streetlight where camera_id in (select camera_id from camera where sensor_id = '".$_REQUEST[                                  'sensor_id']."')";
		}
			
		$execute_q = mysqli_query($con,$fetch_steetlight_q);
		
		$FLAG_NO_FAULT = 0;							
		if(mysqli_num_rows($execute_q) > 0 ){
											
			while($res_streetlight = mysqli_fetch_assoc($execute_q)){
                
				//Fault Streetlights
				if($res_streetlight['st_status'] == "2"){
					
					echo "<div style = float:left; clear:none;><li tabindex='1' class='list-group-item'>";
						echo "<i class='fas fa-lightbulb fa-4x' style='color:#F33;'></i>";
						echo "<h4 id = 'st_id' style='font-size:15px; margin:5px -5px;'>$res_streetlight[st_id]</h4>";
					echo "</li></div>";
					$FLAG_NO_FAULT = 1;                            							 	
				}
            }
			if($FLAG_NO_FAULT == 0){
				?><div style="border:groove; width:700px; color:#F00; margin:50px 250px; padding:8px;"><center><h5>No Faulty Streetlight Available</h5></center></div><?php
			}
		}else{
			if($FLAG_NO_FAULT == 0){
				?><div style="border:groove; width:700px; color:#F00; margin:50px 250px; padding:8px;"><center><h5>No Faulty Streetlight Available</h5></center></div><?php
			}
		}
	
	}
?>