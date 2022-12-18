<?php

require 'includes/databasehandler.inc.php';
require 'includes/header.php';
require_once 'includes/navbar.php';
?>
<body>
    <div class="container">
        <div class="row">
            <form action="includes/addtodatabase.inc.php" method="post">
                <input type="radio" name="satisfaction" value="1">    
                <label for="first">Nem elégedett</label>
                <br>
                <input type="radio" name="satisfaction" value="2">
                <label for="second">Átlagos</label>
                <br>
                <input type="radio" name="satisfaction" value="3">
                <label for="third">Elégedett.</label>
                <br>
                <input type="radio" name="satisfaction" value="4">
                <label for="third">Nagyon elégedett.</label>
                <br>
                <button type="submit" name="fourthsend">
                    Következő
                </button>
            </form>
            
      
        </div>
    </div>
</body>