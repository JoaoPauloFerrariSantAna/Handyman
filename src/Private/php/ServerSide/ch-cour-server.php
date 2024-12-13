<?php 

require_once __DIR__ . "/../Database/Database.php";

session_start();

$db = new Database();

$ra = $_SESSION["sra"];
$new_course = $_POST["new-course"];

$db->update("student_tbl", "student_course", $new_course, "student_ra =", array($ra));

$_SESSION["scourse"] = $new_course;

unset($db);

?>
