<?php

require 'includes/databasehandler.inc.php';
require 'includes/header.php';
require_once 'includes/navbar.php';
if (isset($_SESSION['id'])) {
    header('Location: ./info.php');
    exit();
}

?>

<body>
	<div class="container">
		<div class="row">
			<div class="card mt-5 mx-auto button blurmodals" style="width: 50rem;">
				<div class="card-body mx-auto">
					<h1 class="card-title text-center mb-5 mt-3"> <strong>Fel van iratkozva hírlevelünkre?</strong>
					</h1>
					<form action="includes/addtodatabase.inc.php" method="post" class="mx-auto fs-3 w-75">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="subscription" id="first" value="1">
							<label class="form-check-label" for="first">
								Nem, de szeretnék.
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="subscription" id="second" value="2"
								required>
							<label class="form-check-label" for="second">
								Nem, és nem is szeretnék.
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="subscription" id="third" value="3">
							<label class="form-check-label" for="third">
								Igen.
							</label>
						</div>
						<div class="col-12 text-center">
							<button type="submit" class="mt-3 btn btn-outline-light blurmodals mb-2 btn-lg button"
								name="secondsend"><strong>Következő<img src="img/arrow-right.svg"
										alt=""></strong></button>
						</div>
					</form>

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