<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link  rel="stylesheet" href="./css/bootstrap.css"> ;
    <link  rel="stylesheet" href="./css/styles.css"> ;
    <link  rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <title>LabVirtual - ILEEL</title>

</head>

<body>

<div class="container-fluid-fluid">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">LabVirtual - ILEEL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="contato.html">Contatos</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-primary" role="button" href="login.php">Fazer Login</a>
                </li>

            </ul>

        </div>

    </nav>

</div>
<div class="col-sm-12 mt-4 mb-4 card-body text-center bg-white">
    <form class="form" method="get" action="auxiliar.php">
        Nome: <input type="text" name="nome" id="nome"/><br/><br/><br/>
        Cidade:<input type="text" name="cidade" id="cidade"><br/><br/><br/>
        Senha: <input type="password" name="senha" id="senha"/><br/><br/><br/>
        <fieldset><legend><h3>&emsp;&emsp;Sexo</h3></legend>
            &emsp;&emsp; <input type="radio" id="masc" name="sexo" value="Homem" checked/>
            <label for="masc">Masculino</label>
            <input type="radio" id="fem" name="sexo" value="Mulher"/>
            <label for="fem">Feminino</label><br/><br/><br/>
        </fieldset>
    </form>
    <iframe src="contrato.html" name="anexoA" id="frame-spec" width="1000px"></iframe><br/><br/>
    <input type="submit" value="Concordo"/>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./js/jquery.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="js/testefinal.js"></script>
</body>

</html>