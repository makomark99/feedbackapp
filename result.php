<?php 
 require_once 'includes/header.php';
 require_once 'includes/navbar.php';
 require_once 'includes/databasehandler.inc.php';
 
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
                    <canvas id="myChart" width="400" height="100">
                        
                    </canvas>
                <script>
                    Copy code
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'My First dataset',
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
                </script>
            </div>
        </div>
        </div>
    </div>
 
 
 </body>
 