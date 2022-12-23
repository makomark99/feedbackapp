<?php
 require_once 'includes/header.php';
 require_once 'includes/navbar.php';
 
?>
<body>
    <div class="container">
        <div class="row">  
        <div class="card mt-5 mx-auto" style="width: 30rem;">
            <div class="card-body">
                <h1 class="card-title text-center mb-5 mt-3"> <strong>Bejelentkezés</strong> </h1>
                <form action="includes/login.inc.php" method="post" class="text-center fs-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Felhasználónév</span>
                        <input type="text" class="form-control" placeholder="Felhasználónév" aria-label="Username" aria-describedby="basic-addon1" name="user">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Jelszó</span>
                        <input type="password" class="form-control" placeholder="Jelszó" aria-label="Recipient's username" aria-describedby="basic-addon2" name="pwd">
                        
                    </div>
                    <div class="col-12">
                        <button type="submit" class="mt-3 btn btn-outline-danger btn-lg button" name="login"><strong>Bejelentkezés<img src="img/arrow-right.svg" alt=""></strong></button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>