<?php
require_once 'databasehandler.inc.php';
$sql1="SELECT count(*) as 'Nem elégedett' from answers Where SATISFACTION = '1'";
$sql2="SELECT count(*) as 'Átlagos' from answers Where SATISFACTION = '2'";
$sql3="SELECT count(*) as 'Elégedett' from answers Where SATISFACTION = '3'";
$sql4="SELECT count(*) as 'Nagyon elégedett' from answers Where SATISFACTION = '4'";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$row1 = mysqli_fetch_array($result1);
$row2 = mysqli_fetch_array($result2);
$row3 = mysqli_fetch_array($result3);
$row4 = mysqli_fetch_array($result4);

$data = array(
    "nem_elegedett" => $row1['Nem elégedett'],
    "atlagos" => $row2['Átlagos'],
    "elegedett" => $row3['Elégedett'],
    "nagyon_elegedett" => $row4['Nagyon elégedett']
  );
  $json_data = json_encode($data);
  file_put_contents('data.json', $json_data);
  $json_data = file_get_contents('data.json');
  $data = json_decode($json_data, true);
  

?>