<?php
 require_once 'includes/header.php';
 require_once 'includes/navbar.php';
 require_once 'includes/databasehandler.inc.php';
 require 'includes/datafromserver.inc.php';
 if (!isset($_SESSION['id'])) {
     header('Location: ./index.php');
     exit();
 }
 

 ?>

<body>
    <div class="container">
        <div class="col-12 text-center">
                <a href="info.php" class="mt-3 btn btn-outline-danger btn-lg button blurmodals"> <strong>Visszajelzések <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                </svg></strong></a>
            </div>
        <div class="row">
            <div class="card mt-5  mb-3  mx-auto blurmodals button" style="width: 60rem;">
                <div class="card-body">
                    <h1 class="card-title text-center mb-5 mt-1"> <strong>Részletek:</strong></h1>
                    <p class="card-text">
                        <h4 class="text-center">Összes visszajelzés:
                            <?php
                                $sql = "SELECT COUNT(*) AS 'DB' from answers";
                                $result = mysqli_query($conn, $sql);
                                $row=mysqli_fetch_array($result);
                                echo $row['DB'];
                            ?>
                        </h4>
                        <h4 class="text-center">Átlag elégdetesség: 
                            <?php 
                                $sql = "SELECT AVG(SATISFACTION) AS 'SF'from answers";
                                $result = mysqli_query($conn, $sql);
                                $row=mysqli_fetch_array($result);
                                echo $row['SF'];
                                
                            ?>
                        </h4>
                        <?php
                            if($row['SF']>= 3.5){
                                echo "<p class='text-center'><u>Gratulálok! A vevők nagyon elégedette az átalad nyújtott szolgáltatással.</u> 😍</p>";
                            }
                            elseif($row['SF'] >= 3 && $row['SF'] < 3.5){
                                echo "<p class='text-center'><u>A vevők nagy része elégedett.</u> 😊</p>";
                            }
                            elseif($row['SF'] >= 2 && $row['SF'] < 3){
                                echo "<p class='text-center'><u>A vevők elégedettsége átlagos.</u> 😒</p>";
                            }
                            elseif($row['SF'] < 2){
                                echo "<p class='text-center'><u>Ajjjaj. A vevők nem elégedettek.</u> 😠</p>";
                            }
                        ?>
                        <h4 class="text-center">Megadott E-Mail címek száma: 
                            <?php 
                                $sql = "SELECT COUNT(*) AS 'EDB'from answers Where EMAIL is not null";
                                $result = mysqli_query($conn, $sql);
                                $row=mysqli_fetch_array($result);
                                echo $row['EDB'];
                            ?>
                        </h4>
                        <form action="includes/emailprint.inc.php" method="post" class="col-12 mb-5 text-center">
                            <button id="bt" type="submit" class="mt-3 btn btn-outline-danger btn-lg button text-white" name="login"><strong>E-Mailek letöltés <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"/>
                            </svg></strong></button>
                        </form>
                    </p>
                </div>
            </div>
            <div class="card mt-5  mb-3   mx-auto blurmodals button" style="width: 60rem;">
                <div class="card-body">
                    <h1 class="card-title text-center mb-5 mt-3"> <strong>Diagrammok</strong></h1>
                    <canvas id="my_Chart" height="200px"></canvas>
                    <script>
                        window.onload = function() {
                            const ctx = document.getElementById('my_Chart');
                            new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Elégedetlen', 'Átlagos', 'Elégedett', 'Nagyon elégedett']
                                        .reverse(),
                                    datasets: [{
                                        label: 'Vevői visszajelzés',
                                        data: data_array,
                                        borderWidth: 1,
                                        backgroundColor: '#0758a4',

                                    }]
                                },
                                options: {
                                    responsive: true,
                                    plugins: {
                                        legend: {
                                            labels: {
                                                // This more specific font property overrides the global property
                                                font: {
                                                    size: 16
                                                    
                                                },
                                            }
                                        },
                                        title: {
                                            display: true,
                                            text: 'Vevői elégedettségek (1-4)',
                                            font: {
                                                size: 24
                                            
                                            },
                                            color: 'white',
                                        },
                                    },
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            ticks: {
                                                font: {
                                                    size: 18
                                                    

                                                },
                                                color: 'white'
                                            },
                                        },
                                        x: {
                                            ticks: {
                                                font: {
                                                    size: 24,
                                                    family: 'Nunito',
                                                },
                                                color: 'white'
                                            },
                                        },
                                    },
                                    color: 'white',
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>


</body>
<style>
   *{
        color: white;
    }
</style>
<?php 
if(isset($_GET['error'])){
    if ($_GET['error'] == "noemail") {
        echo '<script>
        Swal.fire({
            title: "Hiba!",
            text: "Nincs letölthető E-Mail cím!",
            icon: "error",
            confirmButtonColor: "red"
          });
            </script>';
    }
    
}
?>