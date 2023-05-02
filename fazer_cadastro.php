<?php
    require_once "./conexaoDB.php";
    require_once "./funcoes_cadastro.php";

    $nome = $_POST['nome'];
    $dt_nascimento = $_POST['dt_nascimento'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $endereço = $_POST['endereço'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
   
    $senhaC = md5($senha);

    adicionarContato($conexao, $nome, $dt_nascimento, $sexo, $cpf, $email, $senhaC, $endereço, $cep, $telefone);