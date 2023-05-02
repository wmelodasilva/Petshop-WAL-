<?php 
require_once "./conexaoDB.php";
require_once "./funcoes_cadastro.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="cadastro.css">

    <title>Faça seu cadastro na WAL!</title>
    <link rel="icon" type="image/png" href="imagens/patas.png" />
</head>

<body>
    <section class="container">

        <header>
            <a href="index.html"><img src="imagens/logo.png" width="350px" height="300px"></a>
        </header>

        <div class="titulo">
            <h1>A petshop WAL! oferece os melhores produtos para seu bichinho!!</h1>
            <h5>Veja seus pedidos, compre mais rápido e tenha acesso a descontos exclusivos!</h5>
            <p>Preencha seus dados para fazer parte da nossa comunidade!</p>
        </div>


        <div class="subtitulo">
            <h6>Veja mais algumas vantagens de fazer seu cadastro na nossa loja:</h6>
            <p>Acesso antecipado a novos produtos e promoções <br>
                Brinde na primeira compra <br>
                Frete grátis a partir de R$49,99</p>
        </div>


        <fieldset class="dadoscadastro">
            <form class="formulario" method="POST" action="./fazer_cadastro.php"> <br>
                <label for="nome">Nome completo:</label><br>
                    <input type="nome" id="nome" name="nome" size="30" />
<br><br>
                <label for="dataDeNascimento">Data de Nascimento:</label><br>
                    <input type="date" id="data" name="dt_nascimento"/>
<br><br>
                <label for="sexo">Genero:</label><br>
                    <input type="radio" id="mulher" name="sexo" value="Feminino" class="custom-control-input">Feminino</label><br>
                    <input type="radio" id="homem" name="sexo" value="Masculino" class="custom-control-input">Masculino</label><br>
                    <input type="radio" id="outro" name="sexo" value="Outro" class="custom-control-input">Outro</label><br>
                    <input type="radio" id="n-info" name="sexo" value="Não informado" class="custom-control-input">Prefiro não informar</label>
<br><br>
                <label for="cpf">CPF:</label><br>
                    <input type="text" id="cpf" size="30" name="cpf" maxlength="14" onkeypress="mascaracpf(this)"/>
<br><br>
                <label for="email">Endereço de email:</label><br>
                    <input type="email" id="email" size="30" name="email" />
<br><br>
        </fieldset>

        <fieldset class="dadoscadastro2">
            <form class="formulario" method="POST" action="./fazer_cadastro.php"><br>
                <label for="senha">Senha:</label><br>
                    <input type="password" id="senha" size="30" name="senha" />
<br><br>
                <label for="cep">CEP:</label><br>
                    <input type="text" id="cep" size="30" name="cep" onkeypress="mascaracep(this)"/>
<br><br>
                <label for="endereço">Endereço:</label><br>
                    <input type="text" id="endereço" size="30" name="endereço"/>
<br><br>
                <label for="telefone">Telefone para contato:</label><br>
                    <input type="tel" id="telefone" size="30" name="telefone" maxlength="17" placeholder="(xxx) x xxxx-xxxx" onkeypress="mascara(this)">
<br><br>
                <input type="checkbox" id="uso" name="termos">
                    <label for="uso">Concordo com os termos de uso.</label>
<br><br><br>
                <div class="submit">
                    <button type="submit" class="btn-secondary">Cadastrar</button>
                </div>

            </form>

        </fieldset> 

        <div class="macaco">
            <img src="imagens/macaco.png">
        </div>

        <div class="dados">
            <p>Esse site está de acordo com a
                <strong><a href="https://www.gov.br/cidadania/pt-br/acesso-a-informacao/lgpd">
                        Lei Geral de Proteção de Dados Pessoais.</strong></a>
            </p>
        </div>

    </section>


    <script src="sucesso.js"></script>

</body>

</html>