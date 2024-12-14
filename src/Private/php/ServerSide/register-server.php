<?php

session_start();

require_once "../Database/Database.php";
require_once "../Database/db-checkages.php";

$name = trim($_POST["student-name"]);
$ra = trim($_POST["student-ra"]);
$course = trim($_POST["student-course"]);

if(!is_student_unregistered($ra)) {
	echo "Estudante já possui conta.";
	exit(1);
}

$db = new Database();
$db->insert("student_tbl(student_name, student_ra, student_course)", array($name, $ra, $course));

$suid = $db->select("student_id", "student_tbl", "student_ra = ", array($ra));

$_SESSION["uid"] = $suid[0];
$_SESSION["sname"] = $name;
$_SESSION["sra"] = $ra;
$_SESSION["scourse"] = $course;

unset($db);

header("Location: ../Student/profile.php");

?>
