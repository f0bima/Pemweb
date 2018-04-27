<?php 
$dbHost	= "localhost";
$dbUser	= "root";
$dbPass = "";
$dbName = "app";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// cek connection
if (!$conn) {
    echo "<h1>KONEKSI ERROR</h1>";
    exit();
}

?>