<?php
require 'databasehandler.inc.php';
if(isset($_POST['firstsend'])){
    $selectedanswer = $_POST['fromwhere'];
    $sql="INSERT INTO answers (FROM_WHERE)
    VALUES ('$selectedanswer')";
    if(mysqli_query($conn, $sql)) {
        header('Location: ../subscription.php');
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if(isset($_POST['secondsend'])){
    $selectedanswer = $_POST['subscription'];
    $sql = "SELECT * FROM answers ORDER BY ID DESC LIMIT 1";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['ID'];
    $updatesql = "UPDATE answers SET SUBSCRIBE='$selectedanswer'WHERE id='$id'";

    if(mysqli_query($conn, $updatesql)) {
        header('Location: ../email.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
if(isset($_POST['thirdsend'])){
    $selectedanswer = $_POST['email'];
    $sql = "SELECT * FROM answers ORDER BY ID DESC LIMIT 1";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['ID'];
    $updatesql = "UPDATE answers SET EMAIL='$selectedanswer'WHERE id='$id'";

    if(mysqli_query($conn, $updatesql)) {
        header('Location: ../satisfaction.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
if(isset($_POST['fourthsend'])){
    $selectedanswer = $_POST['satisfaction'];
    $sql = "SELECT * FROM answers ORDER BY ID DESC LIMIT 1";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['ID'];
    $updatesql = "UPDATE answers SET SATISFACTION='$selectedanswer'WHERE id='$id'";

    if(mysqli_query($conn, $updatesql)) {
        echo "siker";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
?>