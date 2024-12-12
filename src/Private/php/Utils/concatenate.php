<?php

function concatenate_placeholders(string $query_values): string {
	$placeholders = "";
	// i've tried to use str_repeat here, but it was just inserting "?,"
	// so i had to do it manually
	for($i = 0; $i < $query_values; $i++) {
		// if we are at the second to last item then just
		// concatenate a question mark instead of a question mark and a comma
		if($i == $query_values - 1) {
			$placeholders .= '?';
			break;
		}
		$placeholders .= "?,";
	}
	return $placeholders;
}

?>
