<?php
	include("connect.php");
	
	//changeCity() function of javascript is invoked from addStreet.php
	if(isset($_GET['city'])){
		$city = $_GET['city'];
		echo "<label>Select Area </label>";
		echo "<select style= margin-left:100px id = selected_area name = area_name onchange = changeArea() required>";
		echo "<option value = >select</option>";
	
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
		echo "<label>Select Sensor </label>";
		echo "<select id = selected_sensor name = sensor_id style=margin-left:85px onchange = changeSensor() required>";
		echo "<option value = >select</option>";		
		
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
		echo "<label>Select Camera </label>";
		echo "<select id = selected_camera name = camera_id style=margin-left:80px onchange = countStreetlight() required>";
		echo "<option value = >select</option>";
			
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
			echo "<input id = 'count_value' type = 'text' name = count_value value = '$res[count]' readonly>";
		}
	}
	
	if(isset($_REQUEST['area_id']) and isset($_REQUEST['sensor_id']) and isset($_REQUEST['camera_id']) and isset($_REQUEST['count'])){
		//generate code for streetlight_id
		
		$area = $_REQUEST['area_id'];
		$sensor = $_REQUEST['sensor_id'];
		$camera = $_REQUEST['camera_id']; 
		//echo "$area<br>";
		//echo "$sensor<br>";
		//echo "$camera<br>";
		
		//convert string to int for condition checking
		$count = number_format($_REQUEST['count']);
			
		//concatenate all values for strretli ght id
		$generate_st_id = strtoupper($area[0].$sensor[0].$camera[0].rand(0,1000)."_".($count+1));
		//echo $generate_st_id;
		
		//INSERT QUERY FOR STREETLIGHT DATA
		$insert_streetlight_q = "insert into streetlight values ('".$generate_st_id."',0,0,'".$camera."')";
		//echo $insert_streetlight_q;
		//limitation condition
		if($count < 5){
			//echo "count=".$count;
			$execute_q = mysqli_query($con,$insert_streetlight_q);
			echo "<h5 style='color:#F00;margin-left:580px;'>Streetlight Added Successfully</h5>";
		}else{
			echo "<h5 style='color:#F00;margin-left:580px;'>Maximum 5 Streetlights per Camera</h5>";
		}

	}
?>