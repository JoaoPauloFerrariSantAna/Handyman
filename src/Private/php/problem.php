<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

	<head>

		<title>ManuTech - Fazer reclamação</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="">
		<meta name="description" content="Página para relatar problemas">
		<link rel="stylesheet" type="text/css" href="../../Public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../Public/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../Public/css/form-problem.css">

	</head>

	<body onload="loadStudentInfo()">

		<header class="header">

			<div class="header-img-container">

				<img src="../../Public/img/MANUTECH LOGO.jpg" height="48" width="48"
				alt="ManuTech logo" id="manutech-logo">



			</div>

			<div class="header-title">

				<h2>Faça a sua reclamação</h2>

			</div>

			<nav>

				<ol class="navbar">

					<li><a href="./profile.php"><span class="student-info"></span></a></li>
					<li><a href="../../Public/html/index.html">Home</a></li>

				</ol>

			</nav>

		</header>

		<main>

			<form id="form-problem-found" method="POST"
				action="problem-found-server.php" autocomplete="off">

				<div class="form-aggregate">

					<div class="form-part problem-title">

						<label for="problem-title">Titulo do problema</label>
						<input type="text"
						id="problem-title" class="complain-title"
						name="problem-title" placeholder="Titulo do problema" required
						data-problem="title">

					</div>


					<div class="form-part problem-block">

						<label for="problem-block">Identifique o bloco</label>
						<input type="text"
						id="problem-block" class="complain-location"
						name="problem-block" placeholder="B1" required
						data-problem="block">

					</div>

				</div>

				<div class="form-aggregate">

					<div class="form-part">

						<div class="problem-area">

							<label for="problem-description">Descreva o problema</label>

							<textarea
							id="problem-description" class="complain-description"
							name="problem-descriptor"
							placeholder="Dê uma descrição detalhada ao problema"
							data-problem="desc">
							</textarea>

						</div>

						<div id="submit-btn-container">

							<button type="submit" id="submit-btn">Enviar reclamação</button>

						</div>

					</div>

				</div>

			</form>

		</main>

		<footer class="footer">

			<p>ManuTech Group INC. &copy;2024</p>

		</footer>

		<script>
			(function() {
				document.getElementById("problem-title").focus();;
			})
		</script>

		<script type="module" src="../../Public/js/problem-found-client.js"></script>
		<script type="text/javascript" src="../js/load-student-data.js"></script>

	</body>

</html>
