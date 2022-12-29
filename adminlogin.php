<?php
 require_once 'includes/header.php';
 require_once 'includes/navbar.php';
 
?>

<body>
	<div class="container " id="signup">
		<div class="row mt-2 ">
			<div class="panel col-lg-4 col-md-6 col-sm-8 mx-auto blurmodals button mt-2">
				<div class="panel-heading text-center ">
					<h1 class="text-white display-5 ">Bejelentkezés</h1>
					<img class="mx-auto w-75 mb-4" id="logo2" src="img/arki_login_logo.png" alt="logo">
				</div>
				<div class="panel-body text-center">
					<form action="includes/login.inc.php" method="post">
						<div class="input-group flex-nowrap px-4 mb-3 fs-5">
							<span style="background-color:#8a8a8a;" class="input-group-text" id="addon-wrapping">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0758a4"
									class="bi bi-person-fill" viewBox="0 0 16 16">
									<path
										d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
								</svg>
							</span>
							<input type="text" name="user" pattern="^[a-zA-Z0-9]*$" class="form-control" required
								placeholder="Felhasználónév" aria-label="Felhasználónév"
								aria-describedby="addon-wrapping">
						</div>
						<div class="input-group flex-nowrap px-4 mb-3 fs-5">
							<span style="background-color:#8a8a8a;" class="input-group-text" id="addon-wrapping">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#b6001e"
									class="bi bi-lock-fill" viewBox="0 0 16 16">
									<path
										d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
								</svg>
							</span>
							<input type="password" name="pwd" class="form-control" required placeholder="Jelszó"
								aria-label="Jelszó" aria-describedby="addon-wrapping">
						</div>
						<div class="panel-footer mx-auto mb-0">
							<button type="submit" name="login"
								class="btn btn-outline-light blurmodals btn-lg p-2 mb-1 col-auto fs-6 button">
								&nbsp;
								<span class="fs-5">Bejelentkezés</span> &nbsp;
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
									class="bi bi-unlock" viewBox="0 0 16 16">
									<path
										d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z" />
								</svg>&nbsp;
							</button>

							<!-- <div style="background-color:#b6001e; padding:10px;" class="alert text-white mx-4 mt-2 ">
							</div> -->

						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<style>
		.button {
			border: 2px solid red;
			border-radius: 32px;
		}

		*:not('button') {
			color: white;
		}

		.blurmodals {
			background: rgba(255, 255, 255, 0.1) !important;
			backdrop-filter: blur(12px) !important;
			padding: 10px;
			border-radius: 20px;
		}
	</style>
	<!--  -->

	<!-- 
	<div class="container">
		<div class="row">
			<div class="card mt-5 mx-auto blurmodals button ps-5 pe-5" style="width: 30rem;">
				<div class="card-body ">

					<h1 class="card-title text-center mb-5 mt-3">
						<img src="img/arki_teglalapban.png" alt="" style="height: 100px;" class="mx-auto mb-3">
						<strong class="text-white">Bejelentkezés</strong>
					</h1>
					<form action="includes/login.inc.php" method="post" class="text-center fs-3">
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" fill="currentColor" class="bi bi-person-circle"
									viewBox="0 0 16 16">
									<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
									<path fill-rule="evenodd"
										d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
								</svg></span>
							<input type="text" class="form-control" placeholder="Felhasználónév" aria-label="Username"
								aria-describedby="basic-addon1" name="user">
						</div>

						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" fill="currentColor" class="bi bi-lock-fill"
									viewBox="0 0 16 16">
									<path
										d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
								</svg></span>
							<input type="password" class="form-control" placeholder="Jelszó"
								aria-label="Recipient's username" aria-describedby="basic-addon2" name="pwd">

						</div>
						<div class="col-12 mb-5">
							<button id="bt" type="submit" class="mt-3 btn btn-outline-danger btn-lg button text-white"
								name="login"><strong>Bejelentkezés <img src="img/arrow-right.svg"
										alt=""></strong></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> -->
</body>
<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfields") {
        echo '<script>
        Swal.fire({
            title: "Hiba!",
            text: "Kérem töltse ki az összes mezőt!",
            icon: "error",
            confirmButtonColor: "red"
          });
            </script>';
    }
    if ($_GET['error'] == "wrongpasswordoradminuser") {
        echo '<script>
        Swal.fire({
            title: "Hiba!",
            text: "Rossz felhasználónév vagy jelszó!",
            icon: "error",
            confirmButtonColor: "red"
          });
            </script>';
    }
}
?>