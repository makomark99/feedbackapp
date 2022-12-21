<?php
require_once 'header.php';
?>

<nav class="navbar navbar-expand-lg bg-danger p-0">
  <div class="container-fluid">
    <a class="navbar-brand pt-0 pb-0" href="./index.php">
        <img src="./img/arki_teglalapban.png" alt="Bootstrap" width="75" height="52">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-right text-center">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php"><strong>Kezdőlap</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="./admininterface/adminlogin.php"><strong>Admin felület</strong></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<style>
body{
    background-image: url("./img/arki.png");
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    
}

</style>