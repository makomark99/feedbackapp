<?php

require_once 'includes/databasehandler.inc.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
if(isset($_SESSION['id'])){
    header('Location: ./info.php');
    exit();
 }
?>
<body>
    <div class="container">
        <div class="row">  
        <div class="card mt-5 mx-auto button" style="width: 50rem;">
            <div class="card-body">
                <h1 class="card-title text-center mb-5 mt-3"> <strong>Értékelje az adott vásárlását. Mennyire elégedett összességében?</strong></h1>
                <form action="includes/addtodatabase.inc.php" method="post" class="text-center fs-3">
                    <input type="range" id="range" name="satisfaction" min="1" max="4" step=1 class="slider">
                    <p id="text">Elégedett 😊</p>
                    <div class="col-12">
                        <button type="submit" class="mt-3 btn btn-outline-danger btn-lg button" name="fourthsend" ><strong>Következő <img src="img/arrow-right.svg" alt=""></strong></button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body> 
<script src="includes/script.js"></script>