<?php 
 require_once 'includes/header.php';
 require_once 'includes/navbar.php';
 require_once 'includes/databasehandler.inc.php';
 require_once 'includes/datafromserver.inc.php';
 if(!isset($_SESSION['id'])){
    header('Location: ./index.php');
    exit();
 }
 
?>
<body>
    <div class="container">
        <div class="row">
        <div class="card mt-5 mx-auto p-0" style="width: 70rem;">
            <div class="card-body mx-auto">
                <h1 class="text-center">Válaszok:</h1>
                <table class="table mx-auto" style="width:95%">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Honnan hallott rólunk?</th>
                        <th scope="col">Fel van e iratkozva?</th>
                        <th scope="col"><nobr>E-Mail</nobr></th> 
                        <th scope="col">Elégedettség</th>
                        <th scope="col" class="time">Dátum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $number = 1;
                            $sql = "SELECT * FROM answers WHERE SUBSCRIBE IS NOT NULL ORDER BY DATE_TIME DESC";
                            $select = mysqli_query($conn, $sql);
                            
                            while($row = mysqli_fetch_array($select)){
                            
                            switch ($row['SATISFACTION']) {
                                case '1':
                                    echo "<tr style='background-color:red;'>";
                                    break;
                                case '2':
                                    echo "<tr style='background-color:yellow;'>";
                                    break;
                                case '3':
                                    echo "<tr style='background-color:lightgreen;'>";
                                    break;
                                case '4':
                                    echo "<tr style='background-color:#14C900;'>";
                                    break;
                                
                                default:
                                    echo "<tr>";
                                    break;
                            }
                            echo "<td>$number.</td>";
                            switch ($row['FROM_WHERE']) {
                                case '1':
                                    echo "<td>Régi ügyfél vagyok (több mint 1 éve ismerem a céget).</td>";
                                    break;
                                case '2':
                                    echo "<td>Új ügyfél vagyok, és ajánlás útján hallottam a cégről.</td>";
                                    break;
                                case '3':
                                    echo "<td>Új ügyfél vagyok, interneten találkoztam a céggel.</td>";
                                    break;
                                default:
                                    echo "<td> -------- </td>";
                                    break;
                            }
                            switch ($row['SUBSCRIBE']) {
                                case '1':
                                    echo "<td>Nem, de szeretnék.</td>";
                                    break;
                                case '2':
                                    echo "<td>Nem, és nem is szeretnék.</td>";
                                    break;
                                case '3':
                                    echo "<td>Igen.</td>";
                                    break;
                                
                                default:
                                    echo "<td> -------- </td>";
                                    break;
                            }
                            if ($row['EMAIL']== NULL) {
                                echo "<td> -------- </td>";
                            }
                            else{
                                echo "<td>$row[EMAIL]</td>";
                            }
                            switch ($row['SATISFACTION']) {
                                case '1':
                                    echo "<td>Nem elégedett</td>";
                                    break;
                                case '2':
                                    echo "<td>Átlagos</td>";
                                    break;
                                case '3':
                                    echo "<td>Elégedett</td>";
                                    break;
                                case '4':
                                    echo "<td>Nagyon Elégedett</td>";
                                    break;
                                    
                                default:
                                    echo "<td> -------- </td>";
                                    break;
                            }
                            echo "<td class='time'>$row[DATE_TIME]</td>";
                            echo "</tr>";
                            $number = $number + 1;
                            }
                            
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</body>
