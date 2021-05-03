<?php

include("config.php");

$cod = $_POST['cod'];
$espec = $_POST['espec'];
$date = $_POST['date'];
$status = $_POST['status'];

$sql = mysql_query("INSERT INTO cadastros(id, cod, espec, date, status) values (NULL, '$cod', '$espec', '$date', '$status')");

if(!$sql) {

    echo("<script type='text/javascript'>alert('Enviado com sucesso!'); location.href='index.php';</script>");
}else{
    header("location:inicio.php");
}

?>