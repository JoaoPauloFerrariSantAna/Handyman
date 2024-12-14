<?php require_once "../DisplayData/display.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>ManuTech - Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Home page for other posts">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/home.css">
	</head>
	<body onload="loadStudentInfo()">
		<header class="header">
			<div id="site-logo">
				<img src="../../../Public/img/MANUTECH LOGO.jpg" alt="ManuTech logo"
				class="icon-site" id="manutech-logo">
			</div>
			<div id="site-name">
				<h1>ManuTech</h1>
			</div>
			<nav>
				<ol class="navbar">
					<li>
						<a href="../Student/profile.php">
							<span class="student-info"></span>
						</a>
					</li>
					<li><a href="../Student/account-config.php">Configurações</a></li>
					<li><a href="../../../Public/html/">Página Inicial</a></li>
				</ol>
			</nav>
		</header>
		<main class="main">
			<section id="posts">
				<header id="posts-header">
					<h3>Posts feitos pelos Alunos</h3>
				</header>
				<div id="posts-all">
					<?php display_all_posts(); ?>
				</div>
			</section>
		</main>
		<footer class="footer">
			<p>ManuTech group INC. &copy;2024</p>
		</footer>
		<script type="text/javascript" src="../../js/load-student-data.js"></script>
	</body>
</html>
