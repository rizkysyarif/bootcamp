<?php 
include 'config.php';

$id=$_GET['id'];
// echo "string $id";=
$result = mysqli_query($mysqli, "DELETE FROM name WHERE id=$id") or die(mysqli_error($mysqli));

header("Location:index.php");


 ?>