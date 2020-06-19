<?php
	include("connect.php");
	
	//changeCity() function of javascript is invoked from addStreet.php
	if(isset($_GET['city'])){
		$city = $_GET['city'];
		echo "<label style = margin-left:50px; >Select Area </label>";
		echo "<select id = selected_area name = area_id onchange = changeArea()  >";
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