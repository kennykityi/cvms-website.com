<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "database";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>