<?php
  require_once "cabecalho.php";

  require_once "class/UsuarioClasse.php";

  $usuario = new UsuarioClasse();
  $listar = $usuario->listarUm($_SESSION['id']);

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

    if (isset($_POST['senha'])){
        if ($senha === $senhaDois){
          $cadastro = new UsuarioClasse();
          $senha = md5($senha);
          $cadastro->senha = $senha;
          $cadastro->atualizarSenha($_SESSION['id']);
        }
    }


    if ($senha === $senhaDois){

      $cadastro = new UsuarioClasse();
      $cadastro->nome = $nome;
      $cadastro->email = $email;
      $cadastro->cep = $cep;
      $cadastro->logradouro = $logradouro;
      $cadastro->bairro = $bairro;
      $cadastro->localidade = $localidade;
      $cadastro->uf = $uf;
      $cadastro->numero = $numero;
      $cadastro->atualizarDados($_SESSION['id']);
      $retornar = true;
    }

    header('Location: lista_chamado.php');
  }


  foreach ($listar as $list){
?>

<section class="container-fluid">

  <form action="" method="post">
    <div class="row" style="margin-top: 50px">

      <div class="col-4 mt-4 text-right">
        <label for="Nome">Nome</label>
      </div>
      <div class=" col-8 input-group input-group-sm mt-3">
        <input type="text" name="nome" class="form-control col-8 text-left" aria-label="Exemplo do tamanho do input"
               aria-describedby="inputGroup-sizing-sm" value="<?php echo $list['nome_usuario'] ?>" placeholder="Nome Completo">
      </div>

    </div>
    <div class="row mt-4">

      <div class="col-4 mt-4  text-right">
        <label for="Nome">E-mail</label>

      </div>
      <div class=" col-8 input-group input-group-sm mt-3">
        <input type="email" name="email" value="<?php echo $list['email_usuario'] ?>" class="form-control col-8 text-left" aria-label="Exemplo do tamanho do input"
               aria-describedby="inputGroup-sizing-sm" placeholder="">
      </div>

    </div>
    <div class="row mt-4">

      <div class="col-4 mt-4  text-right">
        <label for="cep">CEP</label>
      </div>
      <div class=" col-8 input-group input-group-sm mt-3">
        <input type="text" name="cep" class="form-control col-8 text-left" value="<?php echo $list['cep'] ?>" maxlength="9" id="cep" placeholder="Cep">
      </div>

    </div>
    <div class="row mt-4">

      <div class="col-4 mt-4  text-right">
        <label for="logradouro">Logradouro</label>
      </div>
      <div class=" col-8 input-group input-group-sm mt-3">
        <input type="text" name="logradouro" value="<?php echo $list['logradouro'] ?>" class="form-control col-8 text-left" id="logradouro" placeholder="Logradouro">
      </div>

    </div>
    <div class="row mt-4">

      <div class="col-4 mt-4  text-right">
        <label for="bairro">Bairro</label>
      </div>
      <div class=" col-8 input-group input-group-sm mt-3">
        <input type="text" name="bairro" value="<?php echo $list['bairro'] ?>" class="form-control col-8 text-left" id="bairro" placeholder="Bairro">
      </div>

    </div>
    <div class="row mt-4">

      <div class="col-4 mt-4  text-right">
        <label for="localidade">Localidade</label>
      </div>
      <div class=" col-8 input-group input-group-sm mt-3">
        <input type="text" name="localidade" value="<?php echo $list['localidade'] ?>" class="form-control col-8 text-left" id="localidade" placeholder="Localidade">
      </div>

    </div>
    <div class="row mt-4">

      <div class="col-4 mt-4  text-right">
        <label for="uf">UF</label>
      </div>
      <div class=" col-8 input-group input-group-sm mt-3">
        <input type="text" name="uf" value="<?php echo $list['uf'] ?>" class="form-control col-8 text-left" id="uf" placeholder="UF">
      </div>

    </div>
    <div class="row mt-4">

      <div class="col-4 mt-4  text-right">
        <label for="number">Numero</label>
      </div>
      <div class=" col-8 input-group input-group-sm mt-3">
        <input type="text" name="numero" value="<?php echo $list['numero'] ?>" class="form-control col-8 text-left" id="number" placeholder="Número">
      </div>

    </div>
    <div class="row mt-4">

      <div class="col-4 mt-4  text-right">
        <label for="Nome">Senha</label>
      </div>
      <div class=" col-8 input-group input-group-sm mt-3">
        <input type="password" class="form-control col-8 text-left" aria-label="Exemplo do tamanho do input"
               aria-describedby="inputGroup-sizing-sm" name="senha" placeholder="Senha">
      </div>

    </div>
    <div class="row mt-4">

      <div class="col-4 mt-4  text-right">
        <label for="Nome">Repetir Senha</label>
      </div>
      <div class=" col-8 input-group input-group-sm mt-3">
        <input type="password" class="form-control col-8 text-left" aria-label="Exemplo do tamanho do input"
               aria-describedby="inputGroup-sizing-sm" name="senha-dois" placeholder="Repetir a Senha">
      </div>

    </div>
    <div class="text-center">
      <input type="submit" value="Editar" class="btn btn-success text-white">
    </div>
  </form>

  <?php

  }
    require_once "rodape.php";
  ?>