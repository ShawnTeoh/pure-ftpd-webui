<?php
include ("db_connect.php");

$result = mysqli_query ($db, "SELECT * FROM settings WHERE name='ftp_dir'");
$array = mysqli_fetch_array ($result);
$ftp_dir = $array["value"];

$result = mysqli_query ($db, "SELECT * FROM settings WHERE name='upload_speed'");
$array = mysqli_fetch_array ($result);
$upload_speed = $array["value"];

$result = mysqli_query ($db, "SELECT * FROM settings WHERE name='download_speed'");
$array = mysqli_fetch_array ($result);
$download_speed = $array["value"];

$result = mysqli_query ($db, "SELECT * FROM settings WHERE name='quota_size'");
$array = mysqli_fetch_array ($result);
$quota_size = $array["value"];

$result = mysqli_query ($db, "SELECT * FROM settings WHERE name='quota_files'");
$array = mysqli_fetch_array ($result);
$quota_files = $array["value"];

$result = mysqli_query ($db, "SELECT * FROM settings WHERE name='permitted_ip'");
$array = mysqli_fetch_array ($result);
$permitted_ip = $array["value"];

$result = mysqli_query ($db, "SELECT * FROM settings WHERE name='pureftpd_conf_path'");
$array = mysqli_fetch_array ($result);
$pureftpd_conf_path = $array["value"];

$result = mysqli_query ($db, "SELECT * FROM settings WHERE name='pureftpd_init_script_path'");
$array = mysqli_fetch_array ($result);
$pureftpd_init_script_path = $array["value"];

$result = mysqli_query ($db, "SELECT * FROM settings WHERE name='pureftpwho_path'");
$array = mysqli_fetch_array ($result);
$pureftpwho_path = $array["value"];

?>