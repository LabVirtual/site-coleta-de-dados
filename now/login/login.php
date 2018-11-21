<?php

// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

if(isset($_POST['btn'])){
  $erros = array();
  $cpf = mysqli_escape_string($conn,$_POST['cpf']);
  $senha = mysqli_escape_string($conn,$_POST['senha']);

  $sql = "SELECT nome FROM tst.aluno WHERE cpf = '$cpf' AND senha = '$senha' ";
  $row = mysqli_query($conn,$sql);

  if(mysqli_num_rows($row) > 0){
    header('Location: ok.php');
  }
  else{
    echo "CPF ou senha incorretos";
  }
}


?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LabVirtual</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/floating-labels.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
      <div class="header clearfix">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">LabVirtual</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
          <h3 class="text-muted">LabVirtual</h3>
        <h3 class="text-muted"></h3>
      </div>



      <div class="text-center mb-4">
        <img class="mb-4" src="../images/logo-ileel.png" alt="" width="320" height="150">
       <!-- <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
       <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p> -->
      </div>


      <form class="form-signin" action="" method="POSt">
      <div class="form-label-group">
        <input name="cpf" type="number" id="inputEmail" class="form-control" placeholder="CPF" required autofocus>
        <label for="inputEmail">CPF: Somente números</label>
      </div>

      <div class="form-label-group">
        <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Senha  </label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button name="btn"class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <a class="link" href="../cadastro2.php">Ainda não sou cadastrado</a>
    </form>

    <p class="mt-5 mb-3 text-muted text-center">&copy;2018</p>

    <script scr="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script scr="../js/bootstrap.min.js"></script>

    </div> <!-- /container -->
  </body>
</html>
