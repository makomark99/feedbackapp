<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "feedbackapp";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
?>