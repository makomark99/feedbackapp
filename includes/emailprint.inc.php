<?php
use Shuchkin\SimpleXLSXGen;

require_once 'databasehandler.inc.php';
require_once 'SimpleXLSXGen.php';
$email = [
    ['Id', 'E-mail']
];
$id = 0;
$sql = "SELECT EMAIL FROM answers WHERE EMAIL is not null";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
    foreach ($result as $row) {
        $id++;
        $email = array_merge($email, array(
            array(
                $id,
                $row['EMAIL'])));
    }
    $xlsx = SimpleXLSXGen::fromArray($email);
    $xlsx -> downloadAs('FeedbackEmails'.date("YmdHis").'.xlsx');
} else {
    header('Location: ../result.php?error=noemail');
    exit();
}
