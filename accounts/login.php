<?php
require("../php/functions.php");
require("../php/db.php");
session_start();

if(isset($_SESSION['admin'])){
    echo"<script>\n";
	echo"alert('Already Logged In!');\n";
	echo"window.location='../index.php';\n";
	echo"</script>";
}
?>
<link rel="icon" type="image/x-icon" href="../assets/diablo.gif" />
<video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="../assets/mp4/bgfive.mp4" type="video/mp4" /></video>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<html>
<head>
	<title>Sign Page</title>
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../css/stylesthree.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Administrator Sign In</h3>
			</div>
			<div class="card-body">

				<form action="login_tools.php" method="post">
				<fieldset>
					<div class="input-group form-group">
						<div class="input-group-prepend">					
						</div>
						<input type="text" class="form-control" id="username" name="username" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
						</div>
						<input type="password" class="form-control" id="password" name="password" placeholder="password">
					</div>
					<div class="form-group">
                    <button class="btn btn-secondary float-right" id="submit" name="submit" type="submit">Login</button>
					</div>
				</fieldset>
				</form>

				<?php
					if(isset($_GET['status'])){

						if($_GET['status'] == 'empty_username_password'){
							echo"<script>\n";
	                  		echo"alert('Please fill in the form');\n";
	                  		echo"window.location='login.php';\n";
	                  		echo"</script>";
						}
						if($_GET['status'] == 'no_username_found'){
							echo"<script>\n";
	                  		echo"alert('No admin found');\n";
	                  		echo"window.location='login.php';\n";
	                  		echo"</script>";
						}
					}
				?>


			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					For Administrators Only
				</div>
                <center><a class="btn bg-secondary btn-dark m-3" href="../index.php"><i class="fas fa-arrow-left"></i></a></center>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<!-- old login button code might need -->
<!-- <input type="submit" value="Login" class="bg-secondary text-white btn float-right login_btn"> -->