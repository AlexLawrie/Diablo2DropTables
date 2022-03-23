<?php

$user = 'root';
$password = '';
$db = 'diablo2droptables';
$host = 'localhost';
$port = 3306;
$con = mysqli_connect($host, $user, $password, $db);

if(!$con) {
    echo 'Error check db.php file';
}

?>

