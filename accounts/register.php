<?php
require("../php/functions.php");
require("../php/db.php");
session_start();
?>
<link rel="icon" type="image/x-icon" href="../assets/diablo.gif" />
<video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="../assets/mp4/bgfive.mp4" type="video/mp4" /></video>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<html>
<head>
    
	<title>Register Administrator</title>
   
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
				<h3>Register Administrator</h3>
			</div>
			<div class="card-body">

            <?php
    if(!isset($_POST['submit'])){
   ?>
            <fieldset>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="input-group form-group">
						<div class="input-group-prepend">					
						</div>
						<input type="text" class="form-control" id="username" name="username" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
						</div>
						<input type="password" class="form-control" id="adminpassword" name="adminpassword" placeholder="password">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
						</div>
						<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="confirm password">
					</div>
					<div class="form-group">
                    <input class="btn btn-secondary my-2 my-sm-0 float-right" type="submit" name="submit" value="Register">
					</div>
                    </fieldset>
				</form>

                <?php
    } else {
        $username = $_POST['username'];
        $adminpassword = $_POST['adminpassword'];
        $confirm_password = $_POST['confirm_password'];

        if($adminpassword == $confirm_password){
            $salt = base64_encode('alex');
            $encrypted_password = crypt($adminpassword, $salt);
        } else {
            echo"<script>\n";
            echo"alert('Password Confirmed Failed');\n";
            echo"window.location='register.php';\n";
            echo"</script>";
            exit;
        }

        $exists = 0;

        $check_username = "SELECT username FROM admins WHERE username = '$username' LIMIT 1";

        $run_check_username_query = mysqli_query($con, $check_username);
        $num_row_username = mysqli_num_rows($run_check_username_query);

        $result = $num_row_username;

        if($result == 1){
            $exists = 1;

            $result = $num_row_username;
        }

        if($exists == 1){
            echo"<script>\n";
            echo"alert('Username already exists');\n";
            echo"window.location='register.php';\n";
            echo"</script>";
        }

        else {
            $insert_user = "INSERT INTO admins (username, adminpassword, str, adminstatus) VALUES ('$username', '$encrypted_password', '$salt', 'YES')";
            $insert_user_query = mysqli_query($con, $insert_user);
            if($insert_user_query) {
                mysqli_close($con);
                echo"<script>\n";
                echo"alert('Admin created.  You may login.');\n";
                echo"window.location='login.php';\n";
                echo"</script>";
            } else {
                $error = mysqli_errno($con);
                echo "<script>alert('Error in creating account!: ".$error.");</script> ";
                exit;
            }
        }
    }

?>

			</div>
				</div>
                <center><a class="btn bg-secondary btn-dark m-3" href="login.php"><i class="fas fa-arrow-left"></i></a></center>
			</div>
		</div>
	</div>
</div>
</body>
</html>


               

    <!-- <div class="input-group form-group">
						<div class="input-group-prepend">					
						</div>
						<input type="text" class="form-control" id="username" name="username" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
						</div>
						<input type="password" class="form-control" id="adminpassword" name="adminpassword" placeholder="password">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
						</div>
						<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="confirm password">
					</div>
					<div class="form-group">
                    <input class="btn btn-secondary my-2 my-sm-0" type="submit" name="submit" value="Register">
					</div> -->