<?php 
 require_once 'includes/header.php';
 require_once 'includes/navbar.php';
 require_once 'includes/databasehandler.inc.php';
 require 'includes/datafromserver.inc.php';
 if(!isset($_SESSION['id'])){
    header('Location: ./index.php');
    exit();
 }
 

 ?>
 <body>
    <div class="container">
        <div class="row">
        <div class="card mt-5 mx-auto" style="width: 50rem;">
            <div class="card-body">
                <h1 class="card-title text-center mb-5 mt-3"> <strong>Kimutatások</strong></h1>
                    <canvas id="my_Chart" width="200" height="100"></canvas>
                    <script>
                        const ctx = document.getElementById('my_Chart');
                        fetch('data.json')
                        .then(response => response.json())
                        .then(data => {
                            var xValues = ['Nem elegedett', "Átlagos", "Elégedett", "Nagyon elégedett"];
                            var yValues = [data.nem_elegedett, data.atlagos, data.elegedett, data.nagyon_elegedett];
                            var barColors = [
                            "red",
                            "yellow",
                            "lightgreen",
                            "#14C900",
                            ];
                            new Chart(ctx, {
                                type: "bar",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                    }]
                                },
                                options: {
                                    title: {
                                    display: true,
                                    text: "Elégedettség"
                                    }
                                }
                                });
                            
                        });
                        
                        
                    </script>
                </div>
            </div>
        </div>
    </div>
 
 
 </body>
 