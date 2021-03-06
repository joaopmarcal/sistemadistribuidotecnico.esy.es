<?php

    require_once "global.php";

    if (isset($_POST['email'])){

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha = md5($senha);

        $login = new UsuarioClasse();
        $buscarSistema = $login->conferirSenha($email,$senha);


        $id_usuario = $buscarSistema[0]['id_usuario'];
        $nome_banco = $buscarSistema[0]['nome_usuario'];
        $email_banco = $buscarSistema[0]['email_usuario'];
        $senha_banco = $buscarSistema[0]['senha_usuario'];
        $tipo_usuario = $buscarSistema[0]['tipo_usuario'];

        $tipo_usuario = intval($tipo_usuario);

        if ($tipo_usuario === 1){
          ?>
            <script>alert("Somente Técnicos podem acessar a esta área")</script>
          <?php
        } elseif ($email === $email_banco && $senha === $senha_banco){
            session_start();
            $_SESSION['nome'] = $nome_banco;
            $_SESSION['email'] = $email_banco;
            $_SESSION['id'] = $id_usuario;
          header('Location: lista_chamado.php');
        } else {
            ?>
            <script>alert("senha incorreta")</script>
            <?php
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
    <title>Login</title>


</head>

<body style="background-color:#2f328c">
    <section class="container-fluid">
        <div class="">
            <div class="row">
                <div class="col-12 bg text-center">
                    <img src="./img/logo.PNG" alt="" class="rounded-circle " id="perfil-foto">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper fadeInDown">
                        <div id="formContent">

                            <form method="post" action="">
                                <div class="form-group ">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1486452547274!2d-46.65657118453773!3d-23.563104284682005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ceb0a22285%3A0xfcb67939e24c19bb!2sAv.%20Paulista%2C%201578!5e0!3m2!1spt-BR!2sbr!4v1588025577789!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </section>
</body>

</html>