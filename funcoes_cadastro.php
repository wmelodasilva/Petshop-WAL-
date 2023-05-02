<?php
 require_once "./conexaoDB.php";

    function adicionarContato($conexao, $nome, $dt_nascimento, $sexo, $cpf, $email, $senha, $endereço, $cep, $telefone){
        $sql = "INSERT INTO cadastro(nome, dt_nascimento, sexo, cpf, email, senha, endereço, cep, telefone)
        VALUES('$nome', '$dt_nascimento', '$sexo', '$cpf', '$email', '$senha', '$endereço', '$cep', '$telefone')";

        if (mysqli_query($conexao, $sql)) { ?>

            <script>
                alert ('CADASTRO CONCLUIDO COM SUCESSO!');
                window.location= "/petshop/login.php";
            </script>

            <?php

        } else { ?>
            <script>
                alert ('Houve falha ao concluir seu cadastro, por favor tente novamente.');
                window.location= "/petshop/cadastro.php";
            </script>

            <?php
        }
    }
    ?>