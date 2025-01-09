<?php

/* Could i get, somehow, access user id without using session_start? */

require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Utils/dates.php";

$db = new Database();

$db->update("student_tbl", "student_active", '0', "student_ra =", array($_POST["sra"]));
$db->update("student_tbl", "deleted_at", get_utc_time(), "student_ra =", array($_POST["sra"]));

unset($db);

header("Location: ../../../Public/html/index.html");

?>
