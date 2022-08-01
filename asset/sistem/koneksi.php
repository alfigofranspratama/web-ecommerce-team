<?php
require __DIR__."/lib/autoload.php";
date_default_timezone_set("Asia/Jakarta");
// database koneksi
$host = "localhost"; // default localhost
$username = "root";
$password = ""; // default null
$database = "db_team";


$config = new Connection($host, $username, $password, $database);
$conn = $config->connect();

$db = new Handler_db($conn);
?>