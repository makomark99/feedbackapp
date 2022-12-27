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
                <h1 class="card-title text-center mb-5 mt-3"> <strong>Fel van iratkozva hírlevelünkre?</strong> </h1>
                <form action="includes/addtodatabase.inc.php" method="post" class="text-center fs-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="subscription" id="first" value="1">
                        <label class="form-check-label" for="first">
                            Nem, de szeretnék.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="subscription" id="second" value="2" required>
                        <label class="form-check-label" for="second">
                            Nem, és nem is szeretnék.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="subscription" id="third" value="3">
                        <label class="form-check-label" for="third">
                            Igen.
                        </label>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="mt-3 btn btn-danger btn-lg button" name="secondsend"><strong>Következő<img src="img/arrow-right.svg" alt=""></strong></button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>