<?php

require_once "../DisplayData/display.php";

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
	<body>
		<header id="main-header" class="header">
			<?php display_student_info($_SESSION["sname"], $_SESSION["scourse"], $_SESSION["sra"]); ?>
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
		<script type="module">
			import { loadHeader } from "../../../Public/js/components.js";

			loadHeader("../../../Public/img/MANUTECH LOGO.jpg");
		</script>
	</body>
</html>
