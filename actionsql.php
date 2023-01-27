<?php
require_once __DIR__ . '/connection.php';
extract($_POST);
if ($tipo == 'inserir'){
    if (empty($primeiro_nome) || empty($sobrenome) || empty($email) || empty($usuario) || empty($senha)) {
        $retorno = array('codigo' => '0', 'mensagem' => "Preencha todos os campos");
        echo json_encode($retorno);
    } else {
        $connect->query("INSERT INTO USUARIO (primeiro_nome, sobrenome, email, usuario, senha, status) VALUES ('{$primeiro_nome}', '{$sobrenome}', '{$email}', '{$usuario}', '{$senha}', 0)");
        $retorno = array('codigo' => '1', 'mensagem' => "Sucesso! Usuario cadastrado como inativo por medida de segurança. Para utiliza-lo, ative-o nas configurações.");
        echo json_encode($retorno);   
    } 
} else {
    $connect->exec("UPDATE USUARIO SET primeiro_nome = '{$primeiro_nome}', sobrenome = '{$sobrenome}', email = '{$email}', usuario = '{$usuario}', status = '{$status}'  WHERE id='{$id}'") ; 
    $retorno = array('codigo' => '2', 'mensagem' => "Sucesso! Dados atualizados");
    echo json_encode($retorno);
    };
