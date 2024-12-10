<?php

session_start();

require_once "../Database/Database.php";
require_once "../Database/db-queries.php";
require_once "../Database/db-checkages.php";

$name	= trim($_POST["student-name"]);
$ra	= trim($_POST["student-ra"]);
$course = trim($_POST["student-course"]);

if(is_student_unregistered($ra)) {
	echo "Estundate não está registrado.";
	exit(1);
}

if(!is_student_acc_disabled($ra)) {
	echo "Conta do estudante foi desabilitada.";
	exit(1);
}

$db = new Database();

$student = $db->select("student_id", "student_tbl", "student_ra =", array($ra))->fetch_array(MYSQLI_NUM);

unset($db);

$_SESSION["uid"] = $student[0];
$_SESSION["sname"] = $name;
$_SESSION["sra"] = $ra;
$_SESSION["scourse"] = $course;

header("Location: ../Student/profile.php");

?>
