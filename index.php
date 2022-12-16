<?php

require 'includes/databasehandler.inc.php';
require 'includes/header.php';

?>
<body>
    <div class="container">
        <div class="row">
            <form action="includes/addtodatabase.inc.php" method="post">
                <input type="radio" id="first" name="fromwhere" value="1">    
                <label for="first">Régi ügyfél vagyok (több mint 1 éve ismerem a céget).</label>
                <br>
                <input type="radio" id="second" name="fromwhere" value="2">
                <label for="second">Új ügyfél vagyok, és ajánlás útján hallottam a cégről.</label>
                <br>
                <input type="radio" id="third" name="fromwhere" value="3">
                <label for="third">Új ügyfél vagyok, interneten találkoztam a céggel.</label>
                <br>
                <button type="submit" name="firstsend">
                    Következő
                </button>
            </form>
            
      
        </div>
    </div>
</body>
