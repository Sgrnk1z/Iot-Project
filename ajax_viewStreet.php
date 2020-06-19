<?php
	include("connect.php");
	
	//changeCity() function of javascript is invoked from addStreet.php
	if(isset($_GET['city'])){
		$city = $_GET['city'];
		echo "<select id = selected_area name = area_name onchange = changeArea()  style= 'padding:7px; margin-left:-380px; margin-top:-38px;background:#212531;color:white;'>";
		echo "<option value = >Select Area</option>";
	
		if($city!=""){
			$fetch_area_q = "select * from area where city_id = $city";
			$execute_q = mysqli_query($con,$fetch_area_q);
			while($res = mysqli_fetch_assoc($execute_q)){
				echo "<option value = $res[area_id]>$res[area_name]</option>";
			}
			echo "</select>";
		}
	}
	
	//changeArea() function of javascript is invoked from addStreet.php
	if(isset($_GET['area'])){
		$area = $_GET['area'];
		echo "<select id = selected_sensor name = sensor_id onchange = changeSensor() style='padding:7px;margin-left:70px;margin-top:-38px;background:#212531;color:white;' required>";
		echo "<option value = >Select Sensor</option>";		
		
		if($area!=""){
			$fetch_area_q = "select * from sensor where area_id = $area";
			$execute_q = mysqli_query($con,$fetch_area_q);
			
			
			while($res = mysqli_fetch_assoc($execute_q)){
				echo "<option value = $res[sensor_id]>$res[sensor_id]</option>";
			}
			echo "</select>";
		}
	}
	
	//changeSensor() function of javascript is invoked from addStreet.php
	if(isset($_GET['sensor'])){
		$sensor = $_GET['sensor'];
		echo "<select id = selected_camera name = camera_id onchange = fetchStreet()            		                style='padding:7px;margin-left:550px;margin-top:-38px;background:#212531;color:white;'>";
		echo "<option value = >Select Camera</option>";
			
		if($sensor!=""){
			$fetch_area_q = "select * from camera where sensor_id = '$sensor'";
			$execute_q = mysqli_query($con,$fetch_area_q);
			
			while($res = mysqli_fetch_assoc($execute_q)){
				echo "<option value = $res[camera_id]>$res[camera_id]</option>";
			}
			echo "</select>";
		}
	}
	
	//countStreetlight() function of javascript is invoked from addStreet.php
	if(isset($_GET['camera'])){
		$camera = $_GET['camera'];
		echo "<label>Total Streetlights: </label>";
		
		if($camera!=""){
			//fetch total streetlights for particular camera_id
			$fetch_count_streetlight_q = "select count(camera_id) as count from streetlight where camera_id = '".$camera."'";
			$execute_q = mysqli_query($con,$fetch_count_streetlight_q);
			$res = mysqli_fetch_assoc($execute_q);
			echo "<input type = text name = count_value value = $res[count] readonly>";
		}
	}
	
	if(isset($_REQUEST['camera_id']) || isset($_REQUEST['sensor_id'])){
		
		if(isset($_REQUEST['camera_id']) != "" ){
			//fetch streetlight detail according to camera
			$fetch_steetlight_q = "select * from streetlight where camera_id = '".$_REQUEST['camera_id']."'";
			//echo $fetch_steetlight_q; 		
			
		}else{
			$fetch_steetlight_q = "select * from streetlight where camera_id in (select camera_id from camera where sensor_id = '".$_REQUEST[                                  'sensor_id']."')";
		}
			
		$execute_q = mysqli_query($con,$fetch_steetlight_q);
		
									
		if(mysqli_num_rows($execute_q) > 0 ){
											
			while($res_streetlight = mysqli_fetch_assoc($execute_q)){
                                                 
				//On Streetlights
				if($res_streetlight['st_status'] == "1"){
					echo "<div id='$res_streetlight[st_id]' onclick='myfun(this.id)' style = float:left; clear:none; ><li tabindex='1' class='list-group-item' id='$res_streetlight[st_status]' onclick='myfun1(this.id)'>";
						echo "<i class='fas fa-lightbulb fa-4x' style='color:#00ff00'></i>";
						echo "<h4 style='font-size:15px; margin:5px -5px;'>$res_streetlight[st_id]</h4>";
					echo "</li></div>";
				}
												 
				//Off Streetlights
				else if($res_streetlight['st_status'] == "0"){
					echo "<div id='$res_streetlight[st_id]' onclick='myfun(this.id)' style = float:left; clear:none; ><li tabindex='1' class='list-group-item' id='$res_streetlight[st_status]' onclick='myfun1(this.id)'>";
						echo "<i class='fas fa-lightbulb fa-4x' style='color:#06F'></i>";
						echo "<h4 style='font-size:15px; margin:5px -5px;'>$res_streetlight[st_id]</h4>";
					echo "</li></div>";
				}
												 
				//Fault Streetlights
				else if($res_streetlight['st_status'] == "2"){
					echo "<div style = float:left; clear:none;><li tabindex='1' class='list-group-item'>";
						echo "<i class='fas fa-lightbulb fa-4x' style='color:#F33;'></i>";
						echo "<h4 style='font-size:15px; margin:5px -5px;'>$res_streetlight[st_id]</h4>";
				echo "</li></div>";
				}
             }
			 
			 
		}else{
			?><div style="border:groove; width:700px; color:#F00; margin:50px 250px; padding:8px;"><center><h5>No Streetlight Available</h5></center></div><?php
		}
	
	}
?>