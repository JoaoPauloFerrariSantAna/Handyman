<?php 

require_once "display.php";

session_start();

$name		= $_SESSION["sname"];
$classroom	= $_SESSION["sroom"];
$course		= $_SESSION["scourse"];
$uid		= $_SESSION["uid"];

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Handyman - Perfil</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="The student profile page">
		<link rel="stylesheet" type="text/css" href="../../public/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../public/css/profile.css">

	</head>

	<body>

		<header id="main-header" class="header">

			<div id="student-container-info">

				<div class="name-classroom">

					<div id="student-name" class="important-info">

						<p class="student-info"><?php echo $name; ?></p>

					</div>

					<div id="student-room" class="important-info">

						<p class="student-info"><?php echo $classroom; ?></p>

					</div>

				</div>

				<div id="student-course" class="important-info">

					<p class="student-info"><?php echo $course; ?></p>

				</div>

			</div>

			<nav class="header-nav">

				<ol class="navbar">

					<li><a href="logoff.php">Deslogar</a></li>

					<li><a href="account-config.php">Configurar Conta</a></li>

				</ol>

			</nav>

		</header>

		<main class="main">

			<div id="user-problems"><?php display_posts($uid); ?></div>

			<div id="container-btn-problem">

				<p class="look-like-btn"><a href="problem.php">Achou um problema? Avise aqui!</a></p>

			</div>

			<div id="see-posts">

				<p><a href="home.php">Ver reclamações de outros alunos</a></p>

			</div>

		</main>


		<footer class="footer">

			<p>Handyman group INC. &copy;2024</p>

		</footer>


		<script type="text/javascript">

			// READTHIS: https://stackoverflow.com/questions/14100563/how-to-redirect-on-another-page-and-pass-parameter-in-url-from-table
			function relatar() {

				window.location.href = "./problem.php";

			}


		</script>

	</body>

</html>
