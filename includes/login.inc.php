<?php 
 require_once 'databasehandler.inc.php';
 if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    if(empty($user) || empty($pwd)){
        header('Location: ../adminlogin.php?error=emptyfields');
        exit;
    }
    else{
        $sql = "SELECT * FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../adminlogin.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $passwordCheck = password_verify($pwd, $row['pwd']);
                if($passwordCheck == false){
                    header("Location: ../adminlogin.php?error=wrongpasswordoradminuser");
                    exit();
                }
                elseif($passwordCheck == true){
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    
                    header("Location: ../info.php");
                    exit();
                }
                else{
                    header("Location: ../adminlogin.php?error=wrongpassword");
                    exit();
                }
            }else{
                header("Location: ../adminlogin.php?error=wrongpasswordoradminuser");
                exit();
            }
        }
    }
 }
?>