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

<div class="container-fluid">

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
    <div class="col-sm-12 mt-4 mb-4 card-body text-center bg-white">
        <h5 class="mt-4 text-left">Já sou cadastrado&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Cadastrar</h5><br/>
        <div class="row">
            <div class="col-md-6">
                <form method="get" action="auxiliar.php">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email ou CPF</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="emailcadastrado"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" nome="senha1"/>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0"></legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <a style="text-decoration: underline; color: black"   href="#">Esqueci minha senha</a>
                                </div>


                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Acessar Conta</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form method="get" action="fazerconta.php">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email"/>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0"></legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <a></a>
                                </div>


                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" value="fazerconta.php">Prosseguir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>