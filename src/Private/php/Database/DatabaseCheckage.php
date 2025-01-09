<?php

require_once "Database.php";

class DatabaseCheckage extends Database
{
	public function is_unregistered(string $what, string $table, string $where, array $data): bool
	{
		$student_row = parent::select($what, $table, $where, $data);
		return empty($student_row);
	}

	public function is_disabled(string $what, string $table, string $where, array $data): bool
	{
		$acc_status = parent::select($what, $table, $where, $data)->fetch_array(MYSQLI_NUM);
		return ($acc_status[0] == 1 ? false : true);
	}
}

?>
