<?php

require 'includes/databasehandler.inc.php';
require 'includes/header.php';
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
                <h1 class="card-title text-center mb-5 mt-3"> <strong>Adja meg e-mail címét a feliratkozáshoz!</strong> </h1>
                <form action="includes/addtodatabase.inc.php" method="post" class="text-center fs-3 ps-5 pe-5 ms-2 me-2">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping" ><img src="img/envelope.svg" alt=""></span>
                        <input type="email" class="form-control" placeholder="E-Mail cím" aria-label="Username" aria-describedby="addon-wrapping" name="email" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="mt-4 mb-2 btn btn-outline-danger btn-lg button" name="thirdsend"><strong>Következő<img src="img/arrow-right.svg" alt=""></strong></button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
