<?php

  require_once "ConexaoClasse.php";

  class UsuarioClasse {
    //Atributos
    public $id;
    public $nome;
    public $email;
    public $cep;
    public $logradouro;
    public $bairro;
    public $localidade;
    public $uf;
    public $numero;
    public $senha;

    //Métodos

    public function inserir(){
      $query = "INSERT INTO usuario (nome_usuario,email_usuario,cep,logradouro,bairro,localidade,uf,numero,senha_usuario) VALUES ('" .$this->nome."','" .$this->email."','".$this->cep."','" .$this->logradouro."','" .$this->bairro."','" .$this->localidade."','" .$this->uf."','" .$this->numero."','" .$this->senha."')";
      $conn = \ConexaoClasse::ligarConexao();
      $conn->exec($query);
    }

    public function conferirSenha($email,$senha){
      $query = "select id_usuario,nome_usuario,email_usuario,senha_usuario,tipo_usuario from usuario where senha_usuario = '" . $senha . "' and email_usuario =  '" . $email . "'" ;
      $conn = \ConexaoClasse::ligarConexao();
      $resultado = $conn->query($query);
      $lista = $resultado->fetchAll(PDO::FETCH_ASSOC);
      return $lista;

    }

    public function atualizarDados($id){
      $query = "update usuario set nome_usuario = '". $this->nome ."',";
      $query .= "email_usuario = '". $this->email ."', cep = '". $this->cep ."',logradouro = '". $this->logradouro ."',";
      $query .= "bairro = '". $this->bairro ."', localidade = '". $this->localidade ."',uf = '". $this->uf ."',";
      $query .= "numero = '". $this->numero ."' where id_usuario =" . $id;
      var_dump($query);
      $conn = \ConexaoClasse::ligarConexao();
      $conn->exec($query);
    }

    public function atualizarSenha($id){
      $query = "update usuario set senha_usuario = '". $this->senha ."'";
      $query .= "where id_usuario =" . $id;
      //var_dump($query);
      $conn = \ConexaoClasse::ligarConexao();
      $conn->exec($query);
    }

    public function listarUm($id) {
      $query = "select * from usuario where id_usuario =" . $id;
      $conn = \ConexaoClasse::ligarConexao();
      $resultado = $conn->query($query);
      $lista = $resultado->fetchAll(PDO::FETCH_ASSOC);
      return $lista;
    }

    public function listarTecnicos(){
      $query = "select id_usuario,nome_usuario from usuario where tipo_usuario = 2";
      $conn = \ConexaoClasse::ligarConexao();
      $resultado = $conn->query($query);
      $lista = $resultado->fetchAll(PDO::FETCH_ASSOC);
      return $lista;
    }

  }