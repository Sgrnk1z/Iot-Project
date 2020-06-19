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
	
	
?>