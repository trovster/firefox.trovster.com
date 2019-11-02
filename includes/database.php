<?php
$sql_url = 'localhost';
$sql_username = '';
$sql_password = '';
$sql_database = '';

$dbase = mysqli_connect($sql_url, $sql_username, $sql_password);
mysqli_select_db($dbase, $sql_database);

require_once ('abbreviations.php');

/* stats for browsers */
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];