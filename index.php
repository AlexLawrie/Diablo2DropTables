<?php
require("php/functions.php");
require("php/db.php");
session_start();
?>

<?php
headersmain();
?>
        <!-- Background Video-->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/bgtwo.mp4" type="video/mp4" /></video>

        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="lh-1 mb-1">Diablo 2</h1>
                    <h1 class="lh-1 mb-4">Drop Tables</h1>
                    <p class="">Search boss or monster name and select the game difficulty to show their loot table and drop rates.</p>
                    <p class="">Not sure what the monster is called?  Click the list icon on the right to see a list of monsters!</p>

                    <form action="search.php" name="monstername" method="get" id="monstername">

                        <div class="spacediv row input-group-newsletter">
                            <div class="col"><input class="form-control" name="monstername" id="monstername" type="text" placeholder="Enter boss or monster name" aria-label="Enter boss or monster name"  /></div> 
                        </div>
                        
                        <!-- <div class="spacediv row input-group-newsletter">
                            <div class="col"><input class="form-control" id="text" type="text" placeholder="Enter character magic find" aria-label="Enter character magic find" /></div>
                        </div> -->

                        <div class="form-group">
                             <select class="spacediv btn btn-secondary dropdown-toggle" name='diffselect' id="diffselect" type="text">
                                 <option value="Hell">Hell</option>
                                 <option value="Nightmare">Nightmare</option>
                                 <option value="Normal">Normal</option>
                             </select>  
                        </div>
                       
                        <button class="btn btn-secondary" id="submitButton" type="submit">Submit</button>

                    </form>
                    <p class=""><?php if(isset($_SESSION['admin'])){ echo '<form action="admin/adminpanel.php">'; echo'<p><button type="submit" class="btn btn-secondary">Admin Panel</button></p></form> 
                        <form action="accounts/logout.php"><p><button type="submit" class="btn btn-secondary">Logout</button></p></form>'; };?></p>
                </div>
            </div>
        </div>
<?php
footersmain();
?>
