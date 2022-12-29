<?php
    require_once 'includes/databasehandler.inc.php';
    require_once 'includes/header.php';
    require_once 'includes/navbar.php';
?>

<body>
	<div class="container">
		<div class="row">
			<div class="card mt-5 mx-auto button blurmodals" style="width: 50rem;">
				<div class="card-body text-center">
					<h1 class="card-title text-center mb-2 mt-3"> <strong>Köszönjük, hogy kitöltötte
							kérdőívünket!</strong></h1>
					<a href="index.php" class="mt-3 btn btn-outline-light blurmodals mb-2 btn-lg button"><strong>Vissza
							a
							főoldalra!<img src="img/arrow-right.svg" alt=""></strong></a>
				</div>
			</div>
		</div>
	</div>
</body>
<style>
	.button {
		border: 2px solid red;
		border-radius: 32px;
	}

	* {
		color: white;
	}

	.blurmodals {
		background: rgba(255, 255, 255, 0.1) !important;
		backdrop-filter: blur(12px) !important;
		padding: 10px;
		border-radius: 20px;
	}
</style>