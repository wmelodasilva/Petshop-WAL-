<?php 
session_start();

if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))){
   print "<script>
        alert ('Por favor, preencha seus dados e tente novamente.')
        window.location= '/petshop/login.php';
    </script>";
}

include('conexaoDB.php');   

$email = $_POST["email"];
$senha = md5($_POST["senha"]);
    

$sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

$resultado = $conexao->query($sql) or die($conexao->error);

$row = $resultado->fetch_object();

$quantidade = $resultado->num_rows;

if ($quantidade > 0) {
    $_SESSION["email"] = $email;
    $_SESSION["nome"] = $row->nome;
    print "<script>location.href='index.php';</script>";
} else {
    print "<script> alert ('USUARIO E/OU SENHA INCORRETO(S)!! Tente novamente.');</script>";
    print "<script> location.href='login.php';</script>";
}


?>