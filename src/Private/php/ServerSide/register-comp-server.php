<?php

require_once __DIR__ . "/../Database/Database.php";
require_once "../Links/gen-links.php";

$db = new Database();

// it is not a "uid", but the idea is the same
$uid = $_POST["uid"];
$ptitle = trim($_POST["problem-title"]);
$pblock = trim($_POST["problem-block"]);
$pdesc = trim($_POST["problem-descriptor"]);
$purgen = trim($_POST["urgency"]);

$db->insert("problem_tbl(problem_title, problem_block, problem_desc, problem_urgency, student_id)", array($ptitle, $pblock, $pdesc, $prugen, $uid));

header("Location: ".gen_post_link($ptitle, $pblock, $pdesc));

?>
