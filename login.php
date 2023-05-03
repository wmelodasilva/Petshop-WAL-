<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" type="text/css" href="login.css" media="screen" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="image/png" href="imagens/patas.png"/>
    <title>Login WAL!</title>
  </head>

  <body>
    
    <section class="container"> 

    <header> 
        <a href="index.html"class="btn btn-primary">Voltar à página inicial </a>

        <div class="cobra">
           <a href="index.html"><img src="imagens/cobra.png"  width="200px" height="200px"></a>
        </div>
     </header>  


      <div class="img-logo">
        <img src="imagens/logo.png" width="500px" height="400px">
       <br>


      <div class="cadastro"> 
      <p><strong>Não possui cadastro?</strong></p> 
      <a href="cadastro.php"class="btn btn-secondary">Cadastre-se</a>
    <br><br> </div></div>

        <div class="Formulario">
    <fieldset id="log"> 

        <h1>LOGIN:</h1>
        <p>Veja seus pedidos, compre mais rápido e tenha acesso a descontos exclusivos!</p><br>
      
      <div class="form-group">
        <form method="POST" action="verifica_login.php">
        <label for="email">Endereço de email:</label><br>
        <input 
          type="email"
          class="form-control"
          id="email"
          name="email"
          aria-describedby="emailHelp"
          size="30"/>
      </div>
<br>
      <div class="form-group">
        <label for="senha">Senha:</label> <br>
        <input 
          type="password"
          class="form-control"
          id="senha"
          name="senha"
          size="30"/>
          <a href=#><h5>Esqueceu a senha? Clique aqui.</h5></a>

      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="lembrardemim" />
        <label class="form-check-label" for="exampleCheck1" 
          >Lembrar de mim no próximo login.</label>
      </div>
<br><br>
      <button type="submit" class="btn btn-sucess">Entrar</button><br>
      <p>Ao continuar com o acesso, você concorda com a nossa <strong>política de privacidade</strong>.</p>

    </form>

 </fieldset>
        </div>

      <div class="dados">
        
        <p>Esse site está de acordo com a
          <strong><a href="https://www.gov.br/cidadania/pt-br/acesso-a-informacao/lgpd">
          Lei Geral de Proteção de Dados Pessoais.</strong></p></a>
      </div>

    </section>
  </body>
</html>
