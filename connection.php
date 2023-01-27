<?php
try {
    $connect = new PDO('mysql:host=localhost;dbname=estagio_leo_vilela', 'root', 'BotleD02');
                        //$connect = new PDO('mysql:host=192.168.1.91;dbname=estagio_leo_vilela', 'estagiario_sga', 'eX&RspS8jpay2ZuD');
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }