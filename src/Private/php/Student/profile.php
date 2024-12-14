<?php require_once "../DisplayData/display.php";

session_start();

$uid = $_SESSION["uid"];

?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>ManuTech - Perfil</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="O perfil do estudante">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/profile.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/post.css">
	</head>
	<body onload="loadStudentInfo()">
		<header id="main-header" class="header">
			<div id="student-container-info">
				<div class="name-classroom">
					<div id="student-name-container">
						<p class="student-info"></p>
					</div>
					<div id="student-ra-container">
						<p class="student-info"></p>
					</div>
				</div>
				<div id="student-course-container">
					<p class="student-info"></p>
				</div>
			</div>
			<nav class="header-nav">
				<ol class="navbar">
					<li><a href="../logoff.php" onclick="endSession()">Deslogar</a></li>
					<li><a href="account-config.php">Configurar Conta</a></li>
				</ol>
			</nav>
		</header>
		<main class="main">
			<div id="post-container">
				<?php display_posts($uid); ?>
			</div>
			<div id="container-redirects">
				<div id="redirects">
					<div id="post-problem">
						<p class="look-like-btn">
							<a href="../Post/problem.php" class="no-link">
								Achou um problema? Avise aqui!
							</a>
						</p>
					</div>
					<div id="see-posts">
						<p class="look-like-btn">
							<a href="../Home/home.php" class="no-link">
								Ver reclamações de outros alunos
							</a>
						</p>
					</div>
				</div>
			</div>
		</main>
		<footer class="footer">
			<p>ManuTech group INC. &copy;2024</p>
		</footer>
		<script type="text/javascript" src="../../js/load-student-data.js"></script>
	</body>

</html>
