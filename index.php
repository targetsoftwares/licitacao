<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Editora Landscape</title>

    <!-- Page styles -->
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.min.css">

    <link rel="stylesheet" href="view/styles.css">
    <style>

		#view-source {
	      position: fixed;
	      display: block;
	      right: 0;
	      bottom: 0;
	      margin-right: 40px;
	      margin-bottom: 40px;
	      z-index: 900;
	    }

    </style>
    <script src="view/scripts/jquery.js"></script>
    <script src="view/scripts/migrate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>

      function validar(){
        var x = 0;
        limpar();
        if($("#login").val() == ""){
          colorirInvalido("login");
          document.getElementById("erro").innerHTML = '<br>Por favor, preencha todos os campos.';
          x = 1;
        }

        if($("#senha").val() == ""){
          colorirInvalido("senha");
          document.getElementById("erro").innerHTML = '<br>Por favor, preencha todos os campos.';
          x = 1;
        }

        if(x == 1){
          return false;
        }


      }

      function colorirInvalido(campo){
        document.getElementById(campo).style.border="2px solid red";
        document.getElementById(campo).style.background="#FFE4C4";
      }

      function limpar(){
        document.getElementById("login").style.border="";
        document.getElementById("senha").style.border="";
      }
    </script>

  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <p class="android-logo-image"><img src="view/images/landscape.png">   Landscape</p>
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>

          <span class="android-mobile-title mdl-layout-title">
            <p class="menu-title" >Landscape</p>
          </span>
        </div>
      </div>
        </div>
        <div class="android-screen-section mdl-typography--text-center">
          <a name="screens"></a>
          <div id="mostrar"></div>
          <div class="mdl-typography--display-1-color-contrast"></div>
            <div class="android-wear android-screen" id="mostrarIndex">
              <div id="conteudoIndex">
                <form action="view/logar.php" method="post" class="formCadastro">
                  <fieldset class="fieldsetAcesso">
                  <legend>Sistema de licitações</legend>
                  <label for="login" class="cadastroLeft">Login</label>
                  <br>
                  <input type="text" id="login" name="login" placeholder="Exemplo: maria@email.com">
                  <br>

                  <label for="senha" class="cadastroLeft">Senha</label>
                  <br>
                  <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                  <br>

          				<label for='check'>
          				<input type='checkbox' id='check' name='tipo' value='fornecedor'>Sou fornecedor</input>
          				</label>
                  <div id="erro">

<?php

    if (isset($_GET['erro'])) {
        switch ($_GET['erro']) {
            case 1:
                echo "Dados de identificação não conferem.";
                echo "<script> colorirInvalido('login'); </script>";
                echo "<script> colorirInvalido('senha'); </script>";
                break;
        }
    }

?>
                  </div>
                </fieldset>

                  <input id="botaoLogin" type="submit" onclick="return validar();" value="Entrar">
                  </form>
            </div>
        </div>
        </div>
        <div class="android-more-section">

        </div>

        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light"><i>Desenvolvido por Target Softwares © </i></p>
            <hr>
            <p class="mdl-typography--font-light">Deseja se tornar um de nossos fornecedores? Entre em contato conosco!
                <br> Telefone: 8002-8922
                <br> Email: editora@editora.com</p>
          </div>
        </footer>
      </div>
    </div>
</body>
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</html>
