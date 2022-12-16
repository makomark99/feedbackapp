<?php

require 'includes/databasehandler.inc.php';
require 'includes/header.php';

?>
<body>
    <div class="container">
        <div class="row">
            <form action="includes/addtodatabase.inc.php" method="post">
                <label for="first">E-Mail:</label> 
                <input type="email" id="first" name="email">  
                <button type="submit" name="thirdsend">
                    Következő
                </button>
            </form>
            
      
        </div>
    </div>
</body>