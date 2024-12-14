<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>ManuTech - Configurações da Conta</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Configuração da conta do aluno">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/acc-config.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/general-form.css">
	</head>
	<body onload="loadStudentInfo()">
		<header class="header">
			<h1 class="txt-color center">
				Configurações de <span class="student-info"></span>
			</h1>
		</header>
		<main class="main">
			<div id="account-modifs-container" class="student-form-container">
				<form id="del-acc-form" 
				name="del-acc-form" action="../ServerSide/del-acc-server.php" method="POST">
					<div class="form-part">
						<input type="hidden" value="<?= $_SESSION["sra"]; ?>" name="sra">
						<label for="del-acc-btn" class="txt-center txt-color">Deletar Conta</label>
						<button type="submit" id="del-acc-btn" class="alter-acc-data">Deletar</button>
					</div>
				</form>
				<form id="ch-cour-form" name="ch-cour-form" autocomplete="off"
				onsubmit="return updateStudentCourse()">
					<div class="form-part">
						<label for="current-course" class="txt-center txt-color">Curso atual</label>
						<input type="text" id="current-course" name="current-course"
						value="<?= $_SESSION["scourse"]; ?>" readonly>
						<label for="new-course" class="txt-center txt-color">Curso novo</label>
						<input type="text" id="new-course" name="new-course"
						placeholder="Nome do curso novo">

					</div>
					<div class="form-part">
						<button type="submit" id="ch-cour-btn" class="alter-acc-data">
							Registrar curso atual
						</button>
					</div>
				</form>
			</div>
		</main>
		<footer class="footer">
			<p class="txt-color">ManuTech group INC. &copy;2024</p>
		</footer>
		<script type="text/javascript" src="../../js/ch-course.js"></script>
		<script type="text/javascript" src="../../js/load-student-data.js"></script>
	</body>
</html>
