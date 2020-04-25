<?php

  class RetornoClasse {
    public static function paginaRetorno(){
      ?>
      <div class="container text-center">
        <h1>Retornar a Home para Logar</h1>
        <a href="index.php" class="btn btn-info">
          Voltar
        </a>
      </div>
      <?php
  }

    public static function paginaSenhaIncorreta(){
      ?>
      <div class="container text-center">
        <h1>Senhas não conferem</h1>
        <a href="pagina_cadastro.php" class="btn btn-info">
          Voltar
        </a>
      </div>
      <?php
    }
  }