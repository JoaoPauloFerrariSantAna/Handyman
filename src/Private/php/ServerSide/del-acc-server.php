<?php

require_once __DIR__ . "/../Database/Database.php";

$db = new Database();

$db->update("student_tbl", "student_active", '0', "student_ra =", array($_POST["sra"]));

unset($db);

header("Location: ../../../Public/html/index.html");

?>
