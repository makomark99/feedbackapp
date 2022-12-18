<?php

require_once 'includes/databasehandler.inc.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

?>
<body>
    <div class="container">
        <div class="row">  
        <div class="card mt-5 mx-auto" style="width: 50rem; height: 25rem;">
            <div class="card-body">
                <h1 class="card-title text-center mb-5 mt-3"> <strong>Honnan hallott rólunk?</strong> </h1>
                <form action="includes/addtodatabase.inc.php" method="post" class="text-center fs-3">
                    <input type="radio" id="first" name="fromwhere" value="1">    
                    <label for="first">Régi ügyfél vagyok (több mint 1 éve ismerem a céget).</label>
                    <br>
                    <input type="radio" id="second" name="fromwhere" value="2">
                    <label for="second">Új ügyfél vagyok, és ajánlás útján hallottam a cégről.</label>
                    <br>
                    <input type="radio" id="third" name="fromwhere" value="3">
                    <label for="third">Új ügyfél vagyok, interneten találkoztam a céggel.</label>
                    <br>
                <button type="submit" name="firstsend" class="mt-5 btn btn-danger btn-lg">
                    Következő
                </button>
            </form>
            </div>
        </div>
        </div>
    </div>
</body>
