<?php

function get_utc_time(): string {
	date_default_timezone_set("UTC");
	return date("Y-m-d G:i:s");	
}

?>
