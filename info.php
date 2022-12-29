<?php
 require_once 'includes/header.php';
 require_once 'includes/navbar.php';
 require_once 'includes/databasehandler.inc.php';
 if (!isset($_SESSION['id'])) {
     header('Location: ./index.php');
     exit();
 }
 
?>
<script defer>
	$(document).ready(function() {
		$('#myTable').DataTable({

			"oLanguage": {
				"sSearch": "Keresés:",
			},
			"language": {
				"paginate": {
					"first": "Első",
					"last": "Utolsó",
					"next": "Következő",
					"previous": "Előző"
				},
				"info": "Mutatva _START_ - _END_-ig , _TOTAL_ találatból",
				"infoFiltered": "(szűrve _MAX_ találatból)",
				"infoPostFix": "",
				"zeroRecords": "A keresésnek nincs találata",
				"infoEmpty": "Nincs találat",
				"lengthMenu": '<select class="">' +
					'<option value="5">5</option>' +
					'<option value="10">10</option>' +
					'<option value="25">25</option>' +
					'<option value="50">50</option>' +
					'<option value="100">100</option>' +
					'<option value="-1">Össz</option>' +
					'</select> találat / oldal '
			}
		});
	});
</script>

<body>
	<div class="container ">
		<div class="row mt-3">
			<div class="col-6 text-end">
				<a href="result.php" class="mt-3  btn btn-outline-danger btn-lg button blurmodals"> <strong>Kimutatások
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
							class="bi bi-clipboard2-data-fill" viewBox="0 0 16 16">
							<path
								d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
							<path
								d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0V9a1 1 0 0 1 1-1Z" />
						</svg></strong></a>
			</div>
			<div class="col-6 text-start">
				<a href="includes/print.inc.php" class="mt-3 btn btn-outline-danger btn-lg button blurmodals">
					<strong>Excel export
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
							class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
							<path
								d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z" />
						</svg></strong></a>
			</div>

		</div>
		<div class="row mt-1">
			<div class="card mt-4 mx-auto p-0 blurmodals button mb-5" style="width: 70rem;">
				<div class="card-body">
					<h1 class="text-center mt-3 mb-4">Válaszok</h1>
					<div class="table-responsive">
						<table id="myTable" class="table mx-auto" style="width:100%">
							<thead>
								<tr class="fs-6">
									<th scope="col">#</th>
									<th scope="col">Honnan hallott rólunk?</th>
									<th scope="col" class="sub">Fel van e iratkozva?</th>
									<th scope="col">
										<nobr>E-mail</nobr>
									</th>
									<th>😊</th>
									<th scope="col" class="sub">Elégedettség (1-4)</th>
									<th scope="col" class="time">Dátum</th>
								</tr>
							</thead>
							<tbody style="font-size:95%;" class="align-middle">
								<?php
                            $number = 1;
                            $sql = "SELECT * FROM answers WHERE SUBSCRIBE IS NOT NULL ORDER BY DATE_TIME DESC";
                            $select = mysqli_query($conn, $sql);
                            
                            while ($row = mysqli_fetch_array($select)) {
                                echo '<tr>';
                                echo "<td>$number.</td>";
                                switch ($row['FROM_WHERE']) {
                                case '1':
                                    echo "<td>Régi ügyfél vagyok </td>";
                                    break;
                                case '2':
                                    echo "<td>Új ügyfél és ajánlás útján</td>";
                                    break;
                                case '3':
                                    echo "<td>Új ügyfél és internetről </td>";
                                    break;
                                default:
                                    echo "<td>  </td>";
                                    break;
                            }
                                switch ($row['SUBSCRIBE']) {
                                case '1':
                                    echo "<td class='sub'>Nem, de feliratkozott</td>";
                                    break;
                                case '2':
                                    echo "<td class='sub'>Nem, és nem is szeretne</td>";
                                    break;
                                case '3':
                                    echo "<td class='sub'>Igen</td>";
                                    break;
                                
                                default:
                                    echo "<td class='sub'>  </td>";
                                    break;
                            }
                                if ($row['EMAIL']== null) {
                                    echo "<td>  </td>";
                                } else {
                                    echo "<td>$row[EMAIL]</td>";
                                }
                                switch ($row['SATISFACTION']) {
                                    case '1':
                                        echo "<td class='fs-5'>😠</td>";
                                        break;
                                    case '2':
                                        echo "<td class='fs-5'>😐</td>";
                                        break;
                                    case '3':
                                        echo "<td class='fs-5'>😊</td>";
                                        break;
                                    case '4':
                                        echo "<td class='fs-5'>😍</td>";
                                        break;
                                        
                                    default:
                                        echo "<td>  </td>";
                                        break;
                                    }
                                switch ($row['SATISFACTION']) {
                                case '1':
                                    echo "<td class='sub'>Nem elégedett</td>";
                                    break;
                                case '2':
                                    echo "<td class='sub'>Átlagos</td>";
                                    break;
                                case '3':
                                    echo "<td class='sub'>Elégedett</td>";
                                    break;
                                case '4':
                                    echo "<td class='sub'>Nagyon elégedett</td>";
                                    break;
                                    
                                default:
                                    echo "<td class='sub'>  </td>";
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
	</div>
</body>

<style>
	* {
		color: white;
	}
</style>
<?php
if (isset($_GET['error'])) {
                            if ($_GET['error'] == "nodata") {
                                echo '<script>
        Swal.fire({
            title: "Hiba!",
            text: "Nincs letölthető adat!",
            icon: "error",
            confirmButtonColor: "red"
          });
            </script>';
                            }
                        }

?>