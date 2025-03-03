<?php 

require_once "../DisplayData/display.php";

session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>ManuTech - Fazer reclamação</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Página para relatar problemas">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/form-problem.css">
	</head>
	<body onload="loadStudentInfo()">
		<header class="header">
			<?php display_student_info($_SESSION["sname"], $_SESSION["scourse"], $_SESSION["sra"]); ?>
		</header>
		<main>
			<form id="form-problem-found" method="POST"
				action="../ServerSide/register-comp-server.php" autocomplete="off">
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
							<div id="problem-desc-container">
								<label for="problem-description">Descreva o problema</label>
								<textarea
								id="problem-description" class="complain-description"
								name="problem-descriptor"
								placeholder="Dê uma descrição detalhada ao problema"
								data-problem="desc">
								</textarea>
							</div>
							<div id="problem-severity-container">
								<h3>Severidade da reclamação</h3>
								<div class="severity">
									<input type="radio" value="Pequena" id="small-urgency" name="urgency">
									<label for="small-urgency">Ignorável</label>
									<input type="radio" value="Media" id="medium-urgency" name="urgency">
									<label for="medium-urgency">Importante</label>
									<input type="radio" value="Urgente" id="urgent-urgency" name="urgency">
									<label for="urgent-urgency">Tratar imediatamente</label>
								</div>
							</div>
							<input type="hidden" value="<?= $_SESSION["uid"]; ?>" name="uid">
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
		<script type="module" src="../../../Public/js/problem-found-client.js"></script>
		<script>
			(function() {
				document.getElementById("problem-title").focus();
			})
		</script>
		<script type="module">
			import { loadHeader } from "../../../Public/js/components.js";
			loadHeader("../../../Public/img/MANUTECH LOGO.jpg");
		</script>
	</body>
</html>
