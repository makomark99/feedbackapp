<?php

require_once 'includes/databasehandler.inc.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
if (isset($_SESSION['id'])) {
    header('Location: ./info.php');
    exit();
}
?>

<body>
	<div class="container ">
		<div class="row">
			<div class="card mt-5 mx-auto blurmodals button fs-2" style="width: 50rem;">
				<div class="card-body">
					<h1 class="card-title text-center mt-3"> <strong>Értékelje az adott vásárlását.</strong></h1>
					<h1 class="card-title text-center mb-5 mt-2"> <strong> Mennyire elégedett összességében?</strong>
					</h1>
					<form action="includes/addtodatabase.inc.php" method="post" class="text-center fs-3">
						<div class="text-center ">
							<p>Elégedettség: <span id="emoji">😍</span></p>
							<input name="satisfaction" type="range" min="1" max="4" step="1" value="4" id="range">
							<p id="value">Nagyon elégedett!</p>
						</div>

						<div class="col-12">
							<button type="submit" class="mt-3 btn btn-outline-light blurmodals mb-2 btn-lg button"
								name="fourthsend"><strong>Következő <img src="img/arrow-right.svg"
										alt=""></strong></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

<script>
	const range = document.getElementById('range');
	const value = document.getElementById('value');
	const emoji = document.getElementById('emoji');
	const customerSatisfaction = [
		'Elégedetlen!',
		'Valamennyire elégedett!',
		'Elégedett!',
		'Nagyon elégedett!',
	];
	const customerSatisfactionEmojis = ['😠', '😐', '😊', '😍'];
	range.addEventListener('input', () => {
		value.textContent = `${customerSatisfaction[range.value - 1]}`;
		emoji.textContent = `${customerSatisfactionEmojis[range.value - 1]}`;
	});
	range.addEventListener('input', () => {
		let percent = (range.value - range.min) / (range.max - range.min);
		range.style.background = `linear-gradient(to right, #4caf50 ${percent * 100}%, #222 0%) `;
	});
</script>
<style>
	input[type="range"] {
		-webkit-appearance: none;
		width: 80%;
		height: 15px;
		background: #4caf50;
		border-radius: 30px;
		outline: none;
		opacity: 0.5;
		-webkit-transition: .1s;
		transition: opacity .1s;
	}

	input[type="range"]::-webkit-slider-thumb {
		-webkit-appearance: none;
		appearance: none;
		width: 30px;
		height: 30px;
		border-radius: 50%;
		background: red;
		cursor: pointer;
	}

	input[type="range"]::-moz-range-thumb {
		width: 30px;
		height: 30px;
		background: red;
		border-radius: 50%;
		cursor: pointer;
	}

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