<?php

session_start();

require_once "../Database/Database.php";
require_once "../Database/DatabaseCheckage.php";
require_once "../Utils/dates.php";

$name = trim($_POST["student-name"]);
$ra = trim($_POST["student-ra"]);
$course = trim($_POST["student-course"]);
$reg_time = get_utc_time();

$dbc = new DatabaseCheckage();

if($dbc->is_unregistered("student_ra", "student_tbl", "student_ra =", array($ra))) {
	echo "Estudante já possui conta.";
	exit(1);
}

unset($dbc);

$db = new Database();
$db->insert("student_tbl(student_name, student_ra, student_course, created_at)", array($name, $ra, $course, $reg_time));

$suid = $db->select("student_id", "student_tbl", "student_ra = ", array($ra));

unset($db);

$_SESSION["uid"] = ($suid->fetch_array(MYSQLI_NUM))[0];
$_SESSION["sname"] = $name;
$_SESSION["sra"] = $ra;
$_SESSION["scourse"] = $course;

header("Location: ../Student/profile.php");

?>
