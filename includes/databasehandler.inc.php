<?php
$servername = "pultappdb";
$username = "pultappdb_u";
$password = "ht2@M65p";
$databasename = "feedbackapp";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}
