<?php

require 'includes/databasehandler.inc.php';
require 'includes/header.php';
require_once 'includes/navbar.php';

?>
<body>
    <div class="container">
        <div class="row">
            <form action="includes/addtodatabase.inc.php" method="post">
                <input type="radio" id="first" name="subscription" value="1">    
                <label for="first">Nem, de szeretnék.</label>
                <br>
                <input type="radio" id="second" name="subscription" value="2">
                <label for="second">Nem, és nem is szeretnék.</label>
                <br>
                <input type="radio" id="third" name="subscription" value="3">
                <label for="third">Igen.</label>
                <br>
                <button type="submit" name="secondsend">
                    Következő
                </button>
            </form>
            
      
        </div>
    </div>
</body>