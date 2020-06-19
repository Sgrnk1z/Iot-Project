<html>
	<head>
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

		label,select{
			font-size:17px;
		}

		button {
			background-color: #212531;
			color: white;
			padding: 12px 10px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 80px;
			opacity: 0.9;
		}
					
		table{
			text-align:center;
		}
		td{
			border-bottom-color:#666666;
			color: black;
			margin: 2px 0;
			border: none;
			cursor: pointer;
			width: 15%;
			opacity: 0.9;
			text-align:center;
		}
		.container {
			padding: 12px;
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
					<div  class="sidebar-header">
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
			</nav>
			<!--Sidebar Wrapper-->

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
				
				
				<!--Status Info-->
				<div class="container-fluid">
					<div class="container">
                    <div class="container" style="border:groove;margin-top:40px">
                  <div style = "height:50px; background-color:#212531; color:white;">
                    	<h3 style="padding-left:20px; padding-top:10px;">View Technician</h3>
                    	<hr />
                    </div><br>
                  <form action="viewTech.php" method="post">
                    <table><tr><td>
                    <label style="margin-left:100px;" >Select City</label>
                    <select id="selected_city" name = "city_id" onChange="changeCity()" required>
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
                    </td>
                    
                    <td>
                    <div id = "area">
                        <label>Select Area</label>
                        <select>
                            <option>select</option>
                        </select>
                    </div>
                    </td>
                    </table>
            </form>
			<div id = "tableData">
			</div>
            <br /><br />
            <?php
                        //show alert message for update technician detail
                        if(isset($_REQUEST['msg'])){
                            ?><script>alert("Technician details Updated Successfully")</script><?php
                        }
                
                        //alert delete message 
                        if(isset($_REQUEST['tech_name'])){
                            ?><script>alert("Technician <?php echo $_REQUEST['tech_name']; ?> Removed Successfully")</script><?php
                        }
                        
                    ?>
                    
                  </table>
                </div>
            
            
            <script type="text/javascript">
                function changeCity(){
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("GET","ajax_viewTech.php?city="+document.getElementById("selected_city").value,false);
                    xmlhttp.send(null);
                    //alert(xmlhttp.responseText);
                    document.getElementById("area").innerHTML = xmlhttp.responseText;
					
					if(document.getElementById("selected_city").value == ""){
					
					document.getElementById("area").innerHTML = "<select id = selected_camera name = camera_id style='padding:7px;margin-left:550px;margin-top:-38px;background:#212531;color:white;' required><option>Select Camera</option></select>"
			
				
					}
					
					//for View data On click city 
				var xmlhttp_1 = new XMLHttpRequest();
				xmlhttp_1.open("GET","ajax_viewDataTech.php?city="+document.getElementById("selected_city").value,false);
 				xmlhttp_1.send(null);
				document.getElementById("tableData").innerHTML = xmlhttp_1.responseText;
			
                }
				
				
			
			function changeArea(){
				//For Fetch Data with area
				
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","ajax_viewDataTech.php?area="+document.getElementById("selected_area").value,false);
				xmlhttp.send(null);
				//alert(document.getElementById("selected_area").value);
				document.getElementById("tableData").innerHTML = xmlhttp.responseText;
			
				}
			
			
				
			function deleteTech(id)
			{
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","deleteTech.php?tech_id="+id+"&city="+document.getElementById("selected_city").value,false);
 				xmlhttp.send(null);
				
				document.getElementById("tableData").innerHTML = xmlhttp.responseText;
					
			}
			
				
			
				
            </script>

	</body>
</html>
