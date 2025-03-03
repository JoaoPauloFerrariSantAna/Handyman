<?php

require_once "../Database/Database.php";
require_once __DIR__ . "/../Utils/format.php";

function display_all_posts(): void {
	/**
	 * This function will select every post and then generate a
	 * post card in the home page
	 *
	 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
	 * @version 	2.0.0				Will select and make a post in home page
	 * @since	2.0.0
	 * */
	$db = new Database();
	$posts = $db->select_join("Problem.problem_title Title, Problem.problem_desc DSC, Problem.problem_block Block, Student.student_name Author", "problem_tbl Problem INNER JOIN student_tbl Student ON Problem.student_id = Student.student_id");

	unset($db);

	while($post_data = $posts->fetch_assoc()) {
		$title = $post_data["Title"];
		$desc = $post_data["DSC"];
		$block = $post_data["Block"];
		$author = $post_data["Author"];
		generate_post_home($title, $desc, $block, $author);
	}
}


function display_posts(string $suid): void {
	/**
	 * This function will select every post made by a student and
	 * display at his profile in a post card
	 *
	 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
	 * @version 	2.0.0				Will select and make a post in home page
	 * @since	2.0.0
	 *
	 * @param string $uid The student id in the DB needed to make a JOIN
	 * */
	$db = new Database();
	$posts = $db->select_join("problem_title Title, problem_desc DSC, problem_block Block", "problem_tbl", "problem_tbl.student_id =", array($suid));

	unset($db);

	while($post_data = $posts->fetch_assoc()) {
		$title = $post_data["Title"];
		$desc = $post_data["DSC"];
		$block = $post_data["Block"];
		generate_post_profile($title, $desc, $block);
	}
}

function display_student_info(string $name, string $course, string $ra): void {
// TODO: make it better
echo '
<nav id="student-data">
	<ol>
		<li><a href="#">'.$name.'</a></li>
		<li>'.$course.'</li>
		<li>'.$ra.'</li>
	</ol>
</nav>
<nav id="student-misc">
	<ol>
		<li><a href="../logoff.php" onclick="endSession()">Deslogar</a></li>
		<li><a href="../account-config.php">Configurar Conta</a></li>
	</ol>
</nav>
';
}

?>
