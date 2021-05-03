<?php

include("config.php"); 

$id = $_POST['id'];
$status = $_POST['status'];

$sql = mysql_query("UPDATE cadastros SET status='$status' WHERE id=$id ");


header("location:editar.php");

?>