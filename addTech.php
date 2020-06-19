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
                    <form method="post" action="addTech.php">
                    <div class="container" style="height:auto;width:500px;margin-left:300px;border:groove;margin-top:-25px; position:inherit;">
           			<div style = "height:50px; background-color:#212531; color:white;">
                    	<h3 style="padding-left:20px; padding-top:10px;">Add Technician</h3>
                    	<hr />
                    </div><br>
                      <label>Full Name</label>
                      <input type="text" placeholder="Enter Name" name="name" required/>
                      
                      
                      <label>Email</label>
                      <input type="text" placeholder="Enter Email" name="email" required/>
                
                      <label>Select city</label>
                      
                    <select id="selected_city"  style="margin-left:100px" onChange="changeCity()" required>
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
                        <br><br>	
                      
                    <div id = "area">
                      <label>Select Area</label>
                        <select style= "margin-left:100px">
                            <option>select</option>
                        </select>
                    </div>
                            <br/>
                      <label>Contact</b></label>
                      <input type="number" placeholder="Enter Contact" name="contact" required/>
                
                      <button type="submit" class="signupbtn" name="submit" style="font-size:22px; margin-top:10px">Add</button>
                      </div>
                
                  </form>
                
                <?php 
                
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $contact = $_POST['contact'];
                        $email = $_POST['email'];
                        $area = $_POST['area_name'];
                        /*echo $area;
                        echo $email;
                        echo $contact;
                        echo $name;	
                        */
                        
                        //insert query for technician detail
                        $add_tech_q = "insert into technician values(null,'$name','$email','0','0',$contact,$area)";
                        //echo $add_tech_q;
                        $execute_tech_q = mysqli_query($con,$add_tech_q);
                        //echo $execute_tech_q;
                        if($execute_tech_q){
                            echo "<script>alert('Teechnician $name added successfully ')</script>";
                        }
                        else{
                            echo "<script>alert('Technician $name already exist!')</script>";
                        }
                    
                    }
                ?>

				</div>
			</div> <!--End Of Page COntent-->
            </div>
        </div>
		<!-- AOS Animation-->
		<script>
			AOS.init();
		</script>
        <!--java script for select tag -->
		<script type="text/javascript">
        function changeCity(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","ajax_addStreet.php?city="+document.getElementById("selected_city").value,false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
            document.getElementById("area").innerHTML = xmlhttp.responseText;
            
            if(document.getElementById("selected_city").value == ""){
                document.getElementById("sensor").innerHTML = "<label>Select Sensor </label><select><option>select</option></select>"
                document.getElementById("camera").innerHTML = "<label>Select Camera </label><select><option>select</option></select>"
                document.getElementById("total").innerHTML = "<label>Total Streetlights: </label><input type = text name = count disabled>"
            }
        }
        </script>

	</body>
</html>
