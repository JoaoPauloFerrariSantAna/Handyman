<?php 

session_start();

require_once "../DisplayData/display.php";

?>
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
	<body>
		<header class="header">
			<?php display_student_info($_SESSION["sname"], $_SESSION["scourse"], $_SESSION["sra"]); ?>
		</header>
		<main class="main">
			<header id="posts-header">
				<h3>Posts feitos pelos Alunos</h3>
			</header>
			<div id="posts-all"><?php display_all_posts(); ?></div>
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
