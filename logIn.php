<html>
<head>
	<title>SSIP</title>
	
		<!-- Bootstrap and Other Links-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"> </script>
		<link
		rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"> </script>
		<script type="text/javascript"></script>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		
		<!--Exteral CSS-->
		<link rel="stylesheet" href="loginstyle.css"/>
		
		<!--Extra CSS-->
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="timeline.css">
		<link rel="stylesheet" href="stylesheet.css">

		<link rel="stylesheet" href="responsive.css">
		<link rel="stylesheet" href="font-awesome.min.css">
		<link rel="stylesheet" href="all.min.css">
		<link rel="stylesheet" href="slick.min.css">
		<link rel="stylesheet" href="owl.carousel.min.css">
		<link rel="stylesheet" href="animation.aos.min.css">
		<link rel="stylesheet" href="animate.min.css">
		
		<!--Data Aos Animation-->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"> </script>
		<script>
		AOS.init();
		</script>
		
</head>

<body>
	<div class="row">
		<div class="col-lg-5 col-md-5 col-sm-5 col-xm-5 m-auto">
			<div class="card mt-5 bg-light" >
				<div class="card-title text-center mt-3">
					<img src="img/U2.jfif" width="150px" height="150px">
				</div>
					<div class="card-body">
					<form action="logIn.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-user fa-2x"></i>
								</span>
							</div>
							
							<!--ENter Username-->
							
							<input type="text" class="form-control py-4" name="email" placeholder="Enter Username" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-lock fa-2x"></i>
								</span>
							</div>
							
							<!--Enter Password-->
							<input type="password" class="form-control py-4" name="password" placeholder="Enter Password" required>
						</div>
						
						<!--LogIn Butto-->
						<button class="btn btn-success" type="submit" name="submit" >Login Now</button>
						<!--Forget Password Link-->
						<p class="float-right text-white"><a href="#">Forget Password?</a></p>
                        
					</form>
                    
                    <!-- PHP code for admin login -->
                    <?php
						//connection variable for database connectivity
						include("connect.php");
						
						
						if(isset($_POST['submit'])){
							//fetch entere details from db
							$fetch_data_q = "select admin_email,admin_password from admin where admin_email='".$_POST['email']."' and admin_password='".$_POST['password']."'";
							
							$execute_q = mysqli_query($con,$fetch_data_q);
							
							$res = mysqli_fetch_assoc($execute_q);
							
							$email = $res['admin_email'];
							$password = $res['admin_password'];
							
					
						     //login validation for username and password 
							if($_POST['email'] == $email and $_POST['password'] == $password){
								header("location:dashboard.php");
							}else{
								?><script>alert("Incorrect username and password")</script><?php
							}
						}
						
					?> 
				</div>
			</div>
		</div>
	</div>
</body>
</html>