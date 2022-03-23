<?php
require("../php/functions.php");
require("../php/db.php");
session_start();
if(!isset($_SESSION['admin'])){
    echo"<script>\n";
	echo"alert('Administrators Only!');\n";
	echo"window.location='../index.php';\n";
	echo"</script>";
}
?>

<?php
headersadmin();
?>

 <!-- Background Video-->
 <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="../assets/mp4/admin.mp4" type="video/mp4" /></video>

<div class="masthead">
    <div class="masthead-content text-white">
        <div class="container-fluid px-4 px-lg-0">
            <h1 class="lh-1 mb-1">Administrator</h1>
            <h1 class="lh-1 mb-4">Panel</h1>
            <p class=""><?php if(isset($_SESSION['admin'])){
                echo 'Hello Administrator '; echo $_SESSION['admin'];
                } ?></p>
            <form action="addmonster.php">
            <button class="btn btn-secondary btn-primary btn-lg col-sm-12" id="submit" type="submit">Add Monster</button>
            </form>
            <form action="addgif.php">
            <button class="btn btn-secondary btn-primary btn-lg col-sm-12" id="submit" type="submit">Add Gif</button>
            </form>
            <form action="removemonster.php">
            <button class="btn btn-secondary btn-primary btn-lg col-sm-12" id="submit" type="submit">Remove Monster</button>
            </form>
            <form action="removeadmin.php">
            <button class="btn btn-secondary btn-primary btn-lg col-sm-12" id="submit" type="submit">Remove Administrator</button>
            </form>


            <p class=""><?php if(isset($_SESSION['admin'])){  echo' 
                <form action="../accounts/logout.php"><p><button type="submit" class="btn btn-secondary">Logout</button></p></form>'; };?></p>
        </div>
    </div>
</div>

<?php
footersadmin();
?>
