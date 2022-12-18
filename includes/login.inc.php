<?php 
 require_once 'databasehandler.inc.php';
 if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    if(empty($user) || empty($pwd)){
        header('Location: ../admininterface/adminlogin.php?error=emptyfields');
    }else{

    }
 }
?>