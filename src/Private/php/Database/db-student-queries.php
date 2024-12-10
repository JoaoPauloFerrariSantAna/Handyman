<?php

require_once "Database.php";

function select_all_student_posts(): mysqli_result {
	/**
	 * This function will execute a JOIN in the Database
	 * and get all posts to display at the homepage
	 * 
	 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
	 * @version	2.0.0				Will select all posts made by students
	 * @since	2.0.0
	 *
	 * @returns mysqli_result
	 * */

	$db = new Database();

	// will search table "Problem" and will query for students that made posts
	// I think that... we can optimise this query
	$posts = $db->select_join("Problem.problem_title Title, Problem.problem_desc DSC, Problem.problem_block Block, Student.student_name Author", "problem_tbl Problem INNER JOIN student_tbl Student ON Problem.student_id = Student.student_id");

	unset($db);

	return $posts;
}

/**
 * This function will register the problem that was found by the student
 * in the database
 *
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	2.0.0				Will register the problem to the DB
 * @since 	1.9.0
 *
 * @param string $ptitle The problem title
 * @param string $pblock The block where the problem occured
 * @param string $pdesc The description of the problem
 * @param int $uid The student id that is in the DB
 * */
function send_problem_data(string $ptitle, string $pblock, string $pdesc, string $purgen, int $uid): void {
	$mysql		= connect_db();
	$complain	= "INSERT INTO
		problem_tbl(problem_title, problem_block, problem_desc, problem_urgency, student_id)
		VALUES(?, ?, ?, ?, ?)";

	$stmt = $mysql->prepare($complain);

	$stmt->bind_param("ssssi", $ptitle, $pblock, $pdesc, $purgen, $uid);
	$stmt->execute();
	$stmt->close();
}

/**
 * This function will update the course of the student
 *
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	1.5.0				Will update the course
 * @since	1.3.0
 *
 * @param string $course_to_update
 * @param string $sra Student register number
 * */
function update_course(string $course_to_update, string $sra): void {
	$mysql		= connect_db();
	$alter_course	= "UPDATE student_tbl SET student_course = ? WHERE student_ra = ?";

	$stmt = $mysql->prepare($alter_course);

	$stmt->bind_param("ss", $course_to_update, $sra);
	$stmt->execute();
	$stmt->close();
	$mysql->close();

	$mysql = NUll;
}

?>
