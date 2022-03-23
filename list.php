<?php
require("php/functions.php");
require("php/db.php");
?>
    
   <?php
headersub();
   ?>



       
        <!-- Header-->
        <header class="bg-dark py-1">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Act Bosses</h1>
                </div>
            </div>
        </header>

        
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                
                    <?php
                    hellmonsters();
                    nightmaremonster();
                    normalmonster();
                    ?>
                    

                   
        </section>
        
        <footer class="py-5 bg-dark">
    <div class="container">
    <center>
      <a class="btn btn-dark m-3" href="diffselect.php"><i class="fas fa-arrow-left"></i></a>
      </a>
    </div> </center> 
  </footer>
  
<?php
footersub();
?>
    </body>



