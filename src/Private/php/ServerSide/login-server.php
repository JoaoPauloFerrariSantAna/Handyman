<?php

session_start();

require_once "../Database/Database.php";
require_once "../Database/DatabaseCheckage.php";

$name = trim($_POST["student-name"]);
$ra = trim($_POST["student-ra"]);
$course = trim($_POST["student-course"]);

$dbc = new DatabaseCheckage();

if($dbc->is_disabled("student_active", "student_tbl", "student_ra =", array($ra))) {
	echo "Conta do estudante foi desabilitada.";
	exit(1);
}

unset($dbc);

$db = new Database();

$student = $db->select("student_id", "student_tbl", "student_ra =", array($ra))->fetch_array(MYSQLI_NUM);

unset($db);

$_SESSION["uid"] = $student[0];
$_SESSION["sname"] = $name;
$_SESSION["sra"] = $ra;
$_SESSION["scourse"] = $course;

header("Location: ../Student/profile.php");

?>
