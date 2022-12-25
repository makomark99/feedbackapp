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
        <div class="row">
            <div class="card mt-5 mx-auto" style="width: 50rem;">
                <div class="card-body">
                    <h1 class="card-title text-center mb-5 mt-3"> <strong>Kimutatások</strong></h1>
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
                                                    size: 16,
                                                    family: 'Nunito',
                                                },
                                            }
                                        },
                                        title: {
                                            display: true,
                                            text: 'Vevői elégedettségek (1-4)',
                                            font: {
                                                size: 24,
                                                family: 'Nunito'
                                            },
                                            color: 'black',
                                        },
                                    },
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            ticks: {
                                                font: {
                                                    size: 18,
                                                    family: 'Nunito',

                                                },
                                                color: 'black'
                                            },
                                        },
                                        x: {
                                            ticks: {
                                                font: {
                                                    size: 24,
                                                    family: 'Nunito',
                                                },
                                                color: 'black'
                                            },
                                        },
                                    },
                                    color: 'black',
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>


</body>