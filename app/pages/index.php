<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once(__DIR__.'\components\head.php'); ?>

	<title>SandWEches | Accedi</title>
</head>

<body>
	<div class="container">
		<!-- form di login -->
		<div class="col-12 col-md-10 col-lg-6 mx-auto margin-top-form">
			<form action="" class="px-2 py-2 form-container" id="glass" method="post">
				<!-- call to action -->
				<div class="mb-5 text-center">
					<img src="..\assets\img\logo.png" alt="logoSandwech">
				</div>
				<div class="mb-5">
					<h1 class="text-center fw-bold">Benvenuto in SandWEch!</h1>
				</div>
				<!-- campo email -->
				<div class="mb-3">
					<label for="inputEmail" class="form-label">Indirizzo Email</label>
					<input type="text" class="form-control" id="inputEmail" placeholder="mario.rossi@gmail.com" name="email" required>
					<div id="emailHelp" class="form-text">Tranquillo, non venderemo i tuoi dati.</div>
				</div>
				<!-- campo password -->
				<div class="mb-5">
					<label for="inputPassword" class="form-label">Password</label>
					<input type="password" class="form-control" id="inputPassword" name="password" required>
					<div id="emailHelp" class="form-text">Non condividerla con nessuno.</div>
					<div id="emailHelp" class="form-text text-end">
						<a href="forgotPassword.php" class="">Password dimenticata?</a>
					</div>
				</div>
				<!-- tasto per accedere -->
				<div class="text-center">
					<button type="submit" class="btn btn-warning px-5 fs-5 fw-bold">Accedi</button>
					<!-- tasto password dimenticata -->
					<div class="mt-3">
						<!-- <a href="createAccount.php" class="">Crea un nuovo account</a> -->
						<a rolee="button" class="btn btn-success px-5 fs-5 fw-bold" href="createAccount.php">Sei nuovo?</a>
					</div>
				</div>

				<?php
				session_start();

				include_once dirname(__FILE__) . '/../functions/login.php';

				// $inputs = "";
				// $errors = "";

				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					if (!empty($_POST['email']) && !empty($_POST['password']))
					{
						$data = array(
							"email" => $_POST['email'],
							"password" => $_POST['password'],
						);

						if (login($data) == -1)
						{
							echo('<div class="text-center mt-3">');
							echo('<h5 class="text-danger fw-bold">Email o password errata</h5>');
							echo('</div>');                        
						}
					}
					else
					{
						echo('<div class="text-center mt-3">');
						echo('<h5 class="text-danger fw-bold">Inserisci i dati</h5>');
						echo('</div>');
					}
				}
				?>
			</form>
		</div>
	</div>

	<?php require_once(__DIR__.'\components\script.php'); ?>
</body>

</html>