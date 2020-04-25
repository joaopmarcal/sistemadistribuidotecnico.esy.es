<?php

    error_reporting(-1);
    require_once "class/ConexaoClasse.php";
    require_once "class/UsuarioClasse.php";
    require_once "class/RetornoClasse.php";

    if (isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $localidade = $_POST['localidade'];
        $uf = $_POST['uf'];
        $numero = $_POST['numero'];
        $senha = $_POST['senha'];
        $senha = $senha;
        $senhaDois = $_POST['senha-dois'];

        if ($senha === $senhaDois){
          $cadastro = new UsuarioClasse();
          $senha = md5($senha);
          $cadastro->nome = $nome;
          $cadastro->email = $email;
          $cadastro->cep = $cep;
          $cadastro->logradouro = $logradouro;
          $cadastro->bairro = $bairro;
          $cadastro->localidade = $localidade;
          $cadastro->uf = $uf;
          $cadastro->numero = $numero;
          $cadastro->senha = $senha;
          $cadastro->inserir();
          $retornar = true;
        }else {
          $verificador = true;
        }



    }




?>

<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Tela de Cadastro</title>


</head>

<body style="background-color:#2f328c">
    <section class="container-fluid">

        <div class="row">
            <div class="col-12 bg text-center">
                <img src="./img/logo.PNG" alt="" class="rounded-circle " id="perfil-foto">
            </div>
        </div>

          <?php
            if ($retornar){
              RetornoClasse::paginaRetorno();

              exit();

            }
            if ($verificador){
                RetornoClasse::paginaSenhaIncorreta();
                exit();
            }
          ?>


        <form action="" method="post">
            <div class="row" style="margin-top: 50px">

                <div class="col-4 mt-4 text-right">
                    <label class="text-white " for="Nome">Nome</label>
                </div>
                <div class=" col-8 input-group input-group-sm mt-3">
                    <input type="text" name="nome" class="form-control col-8 text-left" aria-label="Exemplo do tamanho do input"
                        aria-describedby="inputGroup-sizing-sm" placeholder="Nome Completo">
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-4 mt-4  text-right">
                    <label class=" text-white" for="Nome">E-mail</label>

                </div>
                <div class=" col-8 input-group input-group-sm mt-3">
                    <input type="email" name="email" value="" class="form-control col-8 text-left" aria-label="Exemplo do tamanho do input"
                        aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-4 mt-4  text-right">
                    <label class="text-white" for="cep">CEP</label>
                </div>
                <div class=" col-8 input-group input-group-sm mt-3">
                    <input type="text" class="form-control col-8 text-left" maxlength="9" id="cep" placeholder="Cep">
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-4 mt-4  text-right">
                    <label class="text-white" for="logradouro">Logradouro</label>
                </div>
                <div class=" col-8 input-group input-group-sm mt-3">
                    <input type="text" name="logradouro" class="form-control col-8 text-left" id="logradouro" placeholder="Logradouro">
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-4 mt-4  text-right">
                    <label class="text-white" for="bairro">Bairro</label>
                </div>
                <div class=" col-8 input-group input-group-sm mt-3">
                    <input type="text" name="bairro" class="form-control col-8 text-left" id="bairro" placeholder="Bairro">
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-4 mt-4  text-right">
                    <label class="text-white" for="localidade">Localidade</label>
                </div>
                <div class=" col-8 input-group input-group-sm mt-3">
                    <input type="text" name="localidade" class="form-control col-8 text-left" id="localidade" placeholder="Localidade">
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-4 mt-4  text-right">
                    <label class="text-white" for="uf">UF</label>
                </div>
                <div class=" col-8 input-group input-group-sm mt-3">
                    <input type="text" name="uf" class="form-control col-8 text-left" id="uf" placeholder="UF">
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-4 mt-4  text-right">
                    <label class="text-white" for="number">Numero</label>
                </div>
                <div class=" col-8 input-group input-group-sm mt-3">
                    <input type="text" name="numero" class="form-control col-8 text-left" id="number" placeholder="Número">
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-4 mt-4  text-right">
                    <label class="text-white " for="Nome">Senha</label>
                </div>
                <div class=" col-8 input-group input-group-sm mt-3">
                    <input type="password" class="form-control col-8 text-left" aria-label="Exemplo do tamanho do input"
                        aria-describedby="inputGroup-sizing-sm" name="senha" placeholder="Senha">
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-4 mt-4  text-right">
                    <label class="text-white" for="Nome">Repetir Senha</label>
                </div>
                <div class=" col-8 input-group input-group-sm mt-3">
                    <input type="password" class="form-control col-8 text-left" aria-label="Exemplo do tamanho do input"
                        aria-describedby="inputGroup-sizing-sm" name="senha-dois" placeholder="Repetir a Senha">
                </div>

            </div>
            <div class="row">
                <div class="col-2 text-center">
                    <input type="submit" class="btn btn-success text-white">
                </div>
            </div>
        </form>

        <div class="col-1 text-center">
            <a class="btn btn-primary text-white ml-3 pl-4 pr-4" href="index.php">Voltar</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>

        <script src="js/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

    </section>
</body>

</html>