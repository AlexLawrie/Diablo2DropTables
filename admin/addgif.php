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
            <h1 class="lh-1 mb-5">Add Gif</h1>



            <fieldset>
            <form action="../php/upload.php" method="post" enctype="multipart/form-data">
             Select gif to upload.  Make sure the file name is named after the actually monster.
                <input class="spacediv" type="file" name="fileToUpload" id="fileToUpload">
                <input class="btn btn-secondary btn-primary btn-lg col-sm-12" type="submit" value="Upload Image" name="submit">
            </form>
            </fieldset>

            

            </form>
        </div>
    </div>
</div>




<?php
footersadminextra();
?>


<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
  Select gif to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form> -->