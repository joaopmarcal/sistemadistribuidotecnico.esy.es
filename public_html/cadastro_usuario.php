<?php

  require_once "global.php";
  require_once "cabecalho.php";

  $usuario = new UsuarioClasse();
  $lista = $usuario->listarUsuario();

  ?>

  <div class="space"></div>
  <div class="container">
    <table class="table tabela">
      <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Localidade</th>
      </tr>
      </thead>
      <tbody>
      <?php
        foreach ($lista as $listar){
      ?>
      <tr>
        <th scope="row"><?php echo $listar['id_usuario'] ?></th>
        <td><?php echo $listar['nome_usuario'] ?></td>
        <td><?php echo $listar['email_usuario'] ?></td>
        <td><?php echo $listar['localidade'] ?></td>
      </tr>
      <?php
        }
      ?>
      </tbody>
    </table>


  </div>

  <?php

  require_once "rodape.php";