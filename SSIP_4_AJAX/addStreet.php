
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMART STREETLIGHT MANAGEMENT SYSTEM (SSMS)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap and Other Links-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"> </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"> </script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"> </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
		
		<script type="text/javascript"> </script>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

		<script src="dashSidebarMenuJs.js"> </script>
		<script src="dashPowerConsumptionGraphJs.js"> </script>

		<!--Exteral CSS-->
		<link rel="stylesheet" href="dashSidebar.css"/>
		<link rel="stylesheet" href="streetLightDetailsShowCardCss.css"/>
		<link rel="stylesheet" href="streetLightDetailsShowCss.css"/>
		
		<!--Extra CSS-->
		

		<!--Data Aos Animation-->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"> </script>

	<style>
	<!--- Css for add Tech Form -->
		body {font-family: Arial, Helvetica, sans-serif;}
		* {box-sizing: border-box}
		
		input[type=text], input[type=number] {
			width: 100%;
			padding: 10px;
			margin: 5px 0 22px 0;
			display: inline-block;
			border: none;
			background: #f1f1f1;
		}
		
		
		
		button {
			background-color: #212531;
			color: white;
			padding: 5px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			opacity: 0.9;
		}
		
		
		.container {
			padding: 16px;
		}
			
	</style>

</head>

<body style="background-color: #ffffff !important;">
<div id="wrapper">
			<div class="overlay">
			</div>
			<!--SideBar Nav-->
			<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
				<ul class="nav sidebar-nav">
					<div class="sidebar-header">
						<div class="sidebar-brand">
							<a href="dashboard.php">Dashboard</a>
						</div>
					</div>
					<li >
						<a href="street_module.php">Street</a></li>
					<li>
						<a href="fault_module.php">Fault</a></li>
					<li>
						<a href="#powerConsumption">Power Consumption</a></li>
					<li>
						<a href="#history">History</a></li>
					<li style="background-color:#36C" class="dropdown">
						<a href="#more" class="dropdown-toggle"  data-toggle="dropdown">More
							<span class="caret"></span></a>
						<ul class="dropdown-menu animated fadeInLeft" role="menu">
							<div class="dropdown-header"></div>
                            
							<li>
								<a href="addStreet.php">Add Streetlight</a></li>
							<li>
								<a href="viewStreet.php">View Streetlight</a></li>
                            <li>
								<a href="addTech.php">Add Technician</a></li>
							<li>
								<a href="viewTech.php">View Technician</a></li>
						</ul>
					</li>
					<li>
						<a href="#logout">Log Out</a></li>
				</ul>
			</nav><!--Sidebar Wrapper-->

			<!--Page Content-->
			<div id="page-content-wrapper">
				<!--Toggle Button-->
				<div>
					<button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
						<span class="hamb-top"></span>
						<span class="hamb-middle"></span>
						<span class="hamb-bottom"></span>
					</button>
					<!--Header-->
					<header style="border-bottom:groove; background-color:#F4F4F4; width:1500px; position:fixed;">
						<h2 class="heading" style="padding:10px 20px;">More</h2>
                    </header>
				</div>
				<br><br>
				
				<div class="container-fluid">
					<div id = "alert_script"></div>
                	<br /><br />
                    <div class="container" style="height:auto;width:500px;margin-left:500pxmargin-top:40px;border:groove;margin-top:-25px; position:inherit;">
           			<div style = "height:50px; background-color:#212531; color:white;">
                    	<h3 style="padding-left:20px; padding-top:10px;">Add Street Light</h3>
                    	<hr />
                    </div><br>
                   	
                    <form method="post">
                    
                        <label>Select City</label>
                        <select style="margin-left:100px" id="selected_city" onChange="changeCity()" required>
                            <option value="">select</option>
                            <?php
                                include("connect.php");
                                
                                //fetch city from city table
                                $fetch_city_q = "select * from city";
                                $execute_q = mysqli_query($con,$fetch_city_q);
                                
                                while($res = mysqli_fetch_assoc($execute_q)){
                                    echo "<option value=$res[city_id]> $res[city_name] </option>";
                                }
                            ?>
                        </select>
                        <br /><br />
                        
           	 			<div id = "area" >
                            <label>Select Area</label>
                            <select style="margin-left:95px">
                                <option>select</option>
                            </select>
                        </div>
                        <br />
                        
                        <div id = "sensor">
                            <label>Select Sensor</label>
                            <select style="margin-left:80px">
                                <option>select</option>
                            </select>
                         </div>
                        <br />
                        
                        <div id = "camera">
                            <label>Select Camera</label>        
                            <select style="margin-left:75px">
                                <option>select</option>
                            </select>
                        </div>
                        <br />
                        
                        <div id = "total">
                        <label>Total Streetlights:</label>
                        <input type = "text" value="0"   disabled>
                        </div>
                        
                        <button type="button" onclick="addStreetlight()" style="font-size:22px; margin-top:10px">Add</button>
                                          
                        <button type="submit" class="cancelbtn" name="cancel" formnovalidate style="font-size:22px; margin-top:10px">Cancel</button>
                    </form>

				</div>
			</div>
            
</body>

<?php
	
	//Cancel Button to Dashboard
	if(isset($_POST['cancel'])){
	
	 header("location:dashBoard.php");
	
	}
?>

<!--java script for select tag -->
<script type="text/javascript">
function changeCity(){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","ajax_addStreet.php?city="+document.getElementById("selected_city").value,false);
	xmlhttp.send(null);
	//alert(xmlhttp.responseText);
	document.getElementById("area").innerHTML = xmlhttp.responseText;
	
	if(document.getElementById("selected_city").value == ""){
		document.getElementById("sensor").innerHTML = "<label>Select Sensor </label><select style='margin-left:85px;'><option>select</option></select>"
		document.getElementById("camera").innerHTML = "<label>Select Camera </label><select style=margin-left:80px><option>select</option></select>"
		document.getElementById("total").innerHTML = "<label>Total Streetlights: </label><input type = text name = count disabled>"
	}
}

function changeArea(){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","ajax_addStreet.php?area="+document.getElementById("selected_area").value,false);
	xmlhttp.send(null);
	//alert(document.getElementById("selected_area").value);
	document.getElementById("sensor").innerHTML = xmlhttp.responseText;
	
	if(document.getElementById("selected_area").value == ""){
		document.getElementById("camera").innerHTML = "<label>Select Camera </label><select style=margin-left:80px><option>select</option></select>"
		document.getElementById("total").innerHTML = "<label>Total Streetlights: </label><input type = text name = count disabled>"
	}
}

function changeSensor(){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","ajax_addStreet.php?sensor="+document.getElementById("selected_sensor").value,false);
	xmlhttp.send(null);
	//alert(document.getElementById("selected_sensor").value);
	document.getElementById("camera").innerHTML = xmlhttp.responseText;
	
}

//this function fetch the total streetlight
function countStreetlight(){
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","ajax_addStreet.php?camera="+document.getElementById("selected_camera").value,false);
	xmlhttp.send(null);
	//alert(document.getElementById("selected_sensor").value);
	document.getElementById("total").innerHTML = xmlhttp.responseText;
	
	if(document.getElementById("selected_camera").value == ""){
		document.getElementById("total").innerHTML = "<label>Total Streetlights: </label><input type = text name = count disabled>"
	}
}

//this function add streetlight to the database
function addStreetlight(){
	
	
	var area = document.getElementById("selected_area").value;
	var sensor = document.getElementById("selected_sensor").value;
	var camera = document.getElementById("selected_camera").value;
	var count = document.getElementById("count_value").value; 
	alert(area+" "+sensor+" "+camera+" "+count);
	
	if(document.getElementById("selected_camera").value != ""){
		var xmlhttp = new XMLHttpRequest();
		
		xmlhttp.open("GET","ajax_addStreet.php?area_id="+area+"&sensor_id="+sensor+"&camera_id="+camera+"&count="+count,false);
		xmlhttp.send(null);
		//alert(document.getElementById("selected_sensor").value);
		document.getElementById("alert_script").innerHTML = xmlhttp.responseText;
	}
	
}




</script>

</html>