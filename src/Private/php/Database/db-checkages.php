<?php

require_once "Database.php";

function is_student_unregistered(string $ra): bool {
	/**
	 * This function will check if the student is already registered in the DB
	 *
	 * @author	João Paulo Ferrari Sant'Ana 	joaopauloferrarisanta@gmail.com
	 * @version	3.0.0				Will return an int that represents the student row
	 * @since	1.0.0
	 *
	 * @param string $ra Student ID
	 *
	 * @return bool 
	 * */
	$db = new Database();
	$student_row = $db->select("student_ra", "student_tbl", "student_ra =", array($ra));
	unset($db);
	return empty($student_row);
}

function is_acc_disabled(string $ra): bool {
	/**
	 * This function will check if the student account is disabled
	 *
	 * This function will see if the account was disabled
	 *
	 * @author	João Paulo Ferrari Sant'Ana 	joaopauloferrarisanta@gmail.com
	 * @version	2.0.0				Will return an bool that represents the account status
	 * @since	1.0.0
	 *
	 * @param string $sra Student register number
	 *
	 * @return bool 
	 * */
	$db = new Database();
	$acc_status = $db->select("student_active", "student_tbl", "student_ra =", array($ra))->fetch_array(MYSQLI_NUM);
	unset($db);
	return ($acc_status[0] == 1 ? false : true);
}

?>
