<?php

$conexao = mysql_connect("localhost", "root", "");

if(!$conexao) {
    die ("Erro ao conectar!");
}

$db = mysql_select_db("controle_manutencao", $conexao);

if(!$db) {
    die ("Erro ao conectar ao Banco de Dados!");
}

?>