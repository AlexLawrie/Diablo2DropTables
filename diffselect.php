<?php
require("php/functions.php");
require("php/db.php");
?>

<?php
headersmain();
?>
        <!-- Background Video-->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/bgthree.mp4" type="video/mp4" /></video>

        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="lh-1 mb-1">Select</h1>
                    <h1 class="lh-1 mb-4">Difficulty</h1>
                    <p class=""></p>

                    <form action="list.php" method="get" id="contactform">

                    <button type="submit" name="Normal"  class="btn btn-outline-secondary">Normal</button>
                        
                    <button type="submit" name="Nightmare" method="get" role="button" class="btn btn-outline-secondary">Nightmare</button>

                    <button type="submit" name="Hell" method="get" role="button" id="HELLBUTTON" class="btn btn-outline-secondary">Hell</button>

                    </form>
                </div>
            </div>
        </div>

    <!-- Social Icons-->
    <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <a class="btn btn-dark m-3" href="index.php"><i class="fas fa-home"></i></a>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
    </html>
