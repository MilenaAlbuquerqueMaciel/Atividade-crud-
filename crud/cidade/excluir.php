<?php
include "../includes/config.php";
$id = (int)$_GET['id'];

$sql = "DELETE FROM cidades WHERE id = $id";
mysqli_query($conn, $sql);
header("Location: index.php");
?>