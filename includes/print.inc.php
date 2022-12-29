<?php
use Shuchkin\SimpleXLSXGen;

require_once 'databasehandler.inc.php';
require_once 'SimpleXLSXGen.php';
$feedback = [
    ['Id', 'Honnan hallott rólunk', 'Fel van e iratkozva', 'E-mail','Elégedettség','Dátum']
];


$id = 0;
$sql = "SELECT * FROM answers ORDER BY ID Desc";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
    foreach ($result as $row) {
        $id++;
        $FROM_WHERE="";
        $SUBSCRIBE="";
        $EMIAL="";
        $SATISFACTION="";
        switch ($row['FROM_WHERE']) {
            case '1':
                $FROM_WHERE.="Régi ügyfél vagyok (több mint 1 éve ismerem a céget).";
                break;
            case '2':
                $FROM_WHERE.="Új ügyfél vagyok, és ajánlás útján hallottam a cégről.";
                break;
            case '3':
                $FROM_WHERE.="Új ügyfél vagyok, interneten találkoztam a céggel.";
                break;
            default:
                $FROM_WHERE.="";
                break;
            }
        switch ($row['SUBSCRIBE']) {
            case '1':
                $SUBSCRIBE.="Nem, de szeretnék.";
                break;
            case '2':
                $SUBSCRIBE.="Nem, és nem is szeretnék.";
                break;
            case '3':
                $SUBSCRIBE.="Igen.";
                break;
            default:
                $SUBSCRIBE.="";
                break;
            }
        if ($row['EMAIL']== null) {
            $EMIAL.="";
        } else {
            $EMIAL.="$row[EMAIL]";
        }
        switch ($row['SATISFACTION']) {
            case '1':
                $SATISFACTION.="Nem elégedett";
                break;
            case '2':
                $SATISFACTION.="Átlagos";
                break;
            case '3':
                $SATISFACTION.="Elégedett";
                break;
            case '4':
                $SATISFACTION.="Nagyon elégedett";
                break;
                    
            default:
                $SATISFACTION.="";
                break;
        }
        $feedback = array_merge($feedback, array(
            array(
                $id,
                $FROM_WHERE,
                $SUBSCRIBE,
                $EMIAL,
                $SATISFACTION,
                $row['DATE_TIME'])));
    }
    $xlsx = SimpleXLSXGen::fromArray($feedback);
    $xlsx -> downloadAs('FeedbackResults'.date("YmdHis").'.xlsx');
} else {
    header('Location: ../info.php?error=nodata');
    exit();
}
