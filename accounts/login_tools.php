<?php
require("../php/db.php");
session_start();

if(isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header('location: login.php?status=empty_username_password');
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $salt = base64_encode('alex');
        $encrypted_password = crypt($password, $salt);

        $query = mysqli_query($con, "SELECT * FROM admins WHERE adminpassword='$encrypted_password' AND username='$username'");
        $rows = mysqli_num_rows($query);

        if ($rows == 1 ) {
            $_SESSION['admin'] = $username;
            mysqli_close($con);
            header("location: ../admin/adminpanel.php?status=login_success");
        } elseif ($rows == 0) {
            mysqli_close($con);
            header("location: login.php?status=no_username_found");
        }
    }
}



?>