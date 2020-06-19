<?php
	include("connect.php");
	//fetch streetlights detail accoriding to seleceted address
	if(isset($_REQUEST['sensor_id'])){
										
		//fetch streetlight detail according to sensor
		$fetch_steetlight_q = "select * from streetlight where camera_id in (select camera_id from camera where sensor_id = '".$_REQUEST[            			                              'sensor_id']."')";
		//echo $fetch_steetlight_q; 		
		$execute_q = mysqli_query($con,$fetch_steetlight_q);
											
	}else if(isset($_REQUEST['camera_id'])){
		
		if($_REQUEST['camera_id'] != "" ){
			//fetch streetlight detail according to camera
			$fetch_steetlight_q = "select * from streetlight where camera_id = '".$_REQUEST['camera_id']."'";
			//echo $fetch_steetlight_q; 		
			$execute_q = mysqli_query($con,$fetch_steetlight_q);
		}
	}
										
	if(mysqli_num_rows($execute_q) > 0 ){
											
			while($res_streetlight = mysqli_fetch_assoc($execute_q)){
                                                 
				//On Streetlights
				if($res_streetlight['st_status'] == "1"){
					echo "<div><li tabindex='1' class='list-group-item'>";
						echo "<i class='fas fa-lightbulb fa-4x' style='color:#00ff00'></i>";
						echo "<h4 id = 'st_id' style='font-size:15px; margin:5px -5px;'>$res_streetlight[st_id]</h4>";
					echo "</li></div>";
				}
												 
				//Off Streetlights
				else if($res_streetlight['st_status'] == "0"){
					echo "<div><li tabindex='1' class='list-group-item'>";
						echo "<i class='fas fa-lightbulb fa-4x' style='color:#06F'></i>";
						echo "<h4 id = 'st_id' style='font-size:15px; margin:5px -5px;'>$res_streetlight[st_id]</h4>";
					echo "</li></div>";
				}
												 
				//Fault Streetlights
				else if($res_streetlight['st_status'] == "2"){
					echo "<div><li tabindex='1' class='list-group-item'>";
						echo "<i class='fas fa-lightbulb fa-4x' style='color:#F33;'></i>";
						echo "<h4 id = 'st_id' style='font-size:15px; margin:5px -5px;'>$res_streetlight[st_id]</h4>";
					echo "</li></div>";
												 }
                }
		}else{
			?><script>alert("No Streetlight Available");</script><?php
		}
	?>