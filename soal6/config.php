<?php


$databaseHost = 'localhost';
$databaseName = 'bc';
$databaseUsername = 'root';
$databasePassword = 'mysql';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
}


?>