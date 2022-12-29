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
				<div class="card-body">
					<h1 class="card-title text-center mb-5 mt-3"> <strong>Adja meg e-mail címét a
							feliratkozáshoz!</strong> </h1>
					<form action="includes/addtodatabase.inc.php" method="post"
						class="text-center fs-3 ps-5 pe-5 ms-2 me-2">
						<div class="input-group flex-nowrap w-75 mx-auto">
							<span class="input-group-text" id="addon-wrapping"><img src="img/envelope.svg"
									alt=""></span>
							<input type="email" class="form-control " placeholder="E-mail cím" aria-label="Username"
								aria-describedby="addon-wrapping" name="email" required>
						</div>
						<div class="col-12">
							<button type="submit" class="mt-3 mb-2 btn  blurmodals btn-outline-light btn-lg button"
								name="thirdsend"><strong>Következő<img src="img/arrow-right.svg"
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