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
            <h1 class="lh-1 mb-5">Remove Monster</h1>

            <?php
if(!isset($_POST['submit'])){
            ?>


            <fieldset>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="spacediv row input-group-newsletter">
                            <div class="col"><input class="form-control" name="monstername" id="monstername" type="text" placeholder="Monster Name"></div> 
                        </div>

                        <div class="form-group">
                             <select class="spacediv btn btn-secondary dropdown-toggle" name='monsterdiff' id="monsterdiff" type="text">
                                 <option value="Hell">Hell</option>
                                 <option value="Nightmare">Nightmare</option>
                                 <option value="Normal">Normal</option>
                             </select>  
                        </div>

                        <div class="form-group">
                    <input class="btn btn-secondary btn-primary btn-lg col-sm-12" type="submit" name="submit" value="Remove Monster">
					</div>
                    <fieldset>
            </form>
<?php
} else {
    $monstername = $_POST['monstername'];
    $monsterdiff = $_POST['monsterdiff'];

    $delete_monster = "DELETE FROM Monsters WHERE monstername='$monstername' AND monsterdiff='$monsterdiff';";
    $delete_monster_query = mysqli_query($con, $delete_monster);
    if($delete_monster_query){
        mysqli_close($con);
        echo"<script>\n";
        echo"window.location='adminpanel.php';\n";
        echo"</script>";
    } else {
                    $error = mysqli_errno($con);
                    echo "<script>alert('Error in deleting monster: ".$error.");</script> ";
                    exit;
    }

    
}

?>

            
</fieldset>
            </form>
        </div>
    </div>
</div>




<?php
footersadminextra();
?>