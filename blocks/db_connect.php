<?php
include ("config.php");
$db = FALSE;
$db = mysqli_connect ("$mysql_host", "$mysql_webui_user", "$mysql_webui_passwd");
if (!$db) {
	$info = "<p align=\"center\" class=\"table_error\">Could not connect:" . mysqli_error($db) . "</p>";
	die (mysqli_error($db));
}
$table = FALSE;
$table = mysqli_select_db ($db, "$mysql_database");
if (!$table) {
	$info = "<p align=\"center\" class=\"table_error\">Could not connect:" . mysqli_error($db) . "</p>";
	die (mysqli_error($db));
}
?>
