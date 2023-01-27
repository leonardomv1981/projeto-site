<?php
$connect = new PDO('mysql:host=192.168.1.91;dbname=estagio_leo_vilela', 'estagiario_sga', 'eX&RspS8jpay2ZuD', [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_CASE => PDO::CASE_NATURAL
]) or print (mysql_error());
$read = $connect->query("SELECT * FROM usuario")->fetch();
echo "dados:";
print_r($read);
