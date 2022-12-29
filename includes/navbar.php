<?php
  require_once 'header.php';
  session_start();
?>

<nav class="navbar navbar-expand-lg text-white p-0">
	<div class="container-fluid bottom">
		<?php
      if (isset($_SESSIon['id'])) {
          echo '<a class="navbar-brand pt-0 pb-0" href="./index.php">';
          echo '<img src="./img/arki_teglalapban.png" alt="Bootstrap" width="75" height="52">';
          echo '</a>';
      }
      if (!isset($_SESSIon['id'])) {
          echo '<a class="navbar-brand pt-0 pb-0" href="./info.php">';
          echo '<img src="./img/arki_teglalapban.png" alt="Bootstrap" width="75" height="52">';
          echo '</a>';
      }
    ?>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end " id="navbarNav">
			<ul class="navbar-nav align-right text-center">
				<?php
          if (isset($_SESSION['id'])) {
              echo '<li class="nav-item text-white">';
              echo '<a class="nav-link"  href="./includes/logout.inc.php"><strong>Kijelentkezés</strong></a>';
              echo '</li>';
          }
          
          if (!isset($_SESSION['id'])) {
              echo '<li class="nav-item text-white">';
              echo '<a class="nav-link" aria-current="page" href="./index.php"><strong>Kezdőlap</strong></a>';
              echo '</li>';
          }
          if (!isset($_SESSION['id'])) {
              echo '<li class="nav-item text-white">';
              echo '<a class="nav-link"  href="./adminlogin.php"><strong>Admin felület</strong></a>';
              echo '</li>';
          }
        ?>
			</ul>
		</div>
	</div>
</nav>
<style>
	.bottom {
		border-bottom: 1px solid white;
	}

	nav {
		background-color: #b6001e !important;
	}

	body {


		background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url(./img/arki_gyor_telephely.jpg) #222222;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
</style>