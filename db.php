<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "belajarpdo";

try {
	$link = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $exeption) {
	echo "Koneksi Error". $exeption->getMessage();
}
 ?>