<?php
session_start();

$_SESSION = array();

session_destroy();

echo "<script>\n"; 
echo "window.location='../index.php';\n"; 
echo "</script>";

?>