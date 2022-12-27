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

    if(mysqli_query($conn, $updatesql)  && $selectedanswer == 1) {
        header('Location: ../email.php');
        exit();
    }elseif(($selectedanswer == 2 || $selectedanswer == 3) && mysqli_query($conn, $updatesql)){
        header('Location: ../satisfaction.php');
        exit();
    }
     else {
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
    $deletesql = "DELETE FROM answers WHERE SUBSCRIBE IS NULL";
    mysqli_query($conn, $deletesql);

    $selectedanswer = $_POST['satisfaction'];
    $sql = "SELECT * FROM answers ORDER BY ID DESC LIMIT 1";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['ID'];
    $time = date('Y-m-d H:i:s');
    $updatetime = "UPDATE answers SET DATE_TIME='$time'WHERE id='$id'";
    mysqli_query($conn, $updatetime);
    $updatesql = "UPDATE answers SET SATISFACTION='$selectedanswer'WHERE id='$id'";
    if(mysqli_query($conn, $updatesql)) {
        header('Location: ../thanks.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>