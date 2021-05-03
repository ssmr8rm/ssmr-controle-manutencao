<?php

include("config.php"); 

$id = $_GET['id'];

$sql = mysql_query("DELETE FROM cadastros WHERE id='$id'");

header("location:editar.php");

?>