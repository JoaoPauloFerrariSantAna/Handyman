<?php

require_once "../Database/Database.php";
require_once "../Database/db-data-format.php";
require_once "../Database/db-student-queries.php";

function display_all_posts(): void {
	/**
	 * This function will select every post and then generate a
	 * post card in the home page
	 *
	 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
	 * @version 	1.0.0				Will select and make a post in home page
	 * @since	2.0.0
	 * */
	$posts = select_all_student_posts();

	while($post_data = $posts->fetch_assoc()) {
		$title	= $post_data["Title"];
		$desc	= $post_data["DSC"];
		$block	= $post_data["Block"];
		$author	= $post_data["Author"];

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
		$title	= $post_data["Title"];
		$desc	= $post_data["DSC"];
		$block	= $post_data["Block"];
		generate_post_profile($title, $desc, $block);
	}
}

?>
