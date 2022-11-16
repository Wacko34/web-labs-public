<?php
function clear_form()
{
    if (key_exists('clear_filter', $_GET))
	{
		$_GET['full_name'] = "";
		$_GET['bio'] = "";
		$_GET['year_of_birth'] = "";
		$_GET['building'] = "";
	}
}
?>