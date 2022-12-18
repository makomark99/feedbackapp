<?php
 require_once '../includes/header.php';
 require_once '../includes/navbar.php';
 
?>
<body>
    <div class="container">
        <div class="row">
            <form action="../includes/login.inc.php" method="post">
                <label for="user">Felhasználónév:</label>
                <input type="text" name="user">
                <br>
                <label for="pwd">Jelszó</label>
                <input type="password" name="pwd">
                <button type="submit" name="login">Bejelentkezés</button>
            </form>
        </div>
    </div>
</body>