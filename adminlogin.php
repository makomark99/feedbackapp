<?php
 require_once 'includes/header.php';
 require_once 'includes/navbar.php';
 
?>
<body>
    <div class="container">
        <div class="row">  
        <div class="card mt-5 mx-auto blurmodals button ps-5 pe-5" style="width: 30rem;">
            <div class="card-body ">
                
                <h1 class="card-title text-center mb-5 mt-3"> 
                    <img src="img/arki_teglalapban.png" alt="" style="height: 100px;" class="mx-auto mb-3">
                    <strong class="text-white">Bejelentkezés</strong>
                </h1>
                <form action="includes/login.inc.php" method="post" class="text-center fs-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg></span>
                        <input type="text" class="form-control" placeholder="Felhasználónév" aria-label="Username" aria-describedby="basic-addon1" name="user">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg></span>
                        <input type="password" class="form-control" placeholder="Jelszó" aria-label="Recipient's username" aria-describedby="basic-addon2" name="pwd">
                        
                    </div>
                    <div class="col-12 mb-5">
                        <button id="bt" type="submit" class="mt-3 btn btn-outline-danger btn-lg button text-white" name="login"><strong>Bejelentkezés <img src="img/arrow-right.svg" alt=""></strong></button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
<?php 
if(isset($_GET['error'])){
    if ($_GET['error'] == "emptyfields") {
        echo '<script>
        Swal.fire({
            title: "Hiba!",
            text: "Kérem töltse ki az összes mezőt!",
            icon: "error",
            confirmButtonColor: "red"
          });
            </script>';
    }
    if ($_GET['error'] == "wrongpasswordoradminuser") {
        echo '<script>
        Swal.fire({
            title: "Hiba!",
            text: "Rossz felhasználónév vagy jelszó!",
            icon: "error",
            confirmButtonColor: "red"
          });
            </script>';
    }
    
}
?>