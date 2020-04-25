<?php

  require_once "ConexaoClasse.php";

  class ChamadoClasse {
    public $id_chamado;
    public $id_usuario;
    public $id_status;
    public $numero_chamado;
    public $atribuicao_chamado;
    public $prioridade_chamado;
    public $telefone_usuario;
    public $tipo_problema;
    public $descricao_chamado;
    public $desc_atend_chamado;

    public function inserir(){
      $query = "insert into chamado (id_usuario, id_status, prioridade_chamado";
      $query .= ", telefone_usuario, tipo_problema,descricao_chamado) ";
      $query .= "values ('".$this->id_usuario."','".$this->id_status."',";
      $query .= "'".$this->prioridade_chamado."','".$this->telefone_usuario."','".$this->tipo_problema."','".$this->descricao_chamado."')";
      $conn = \ConexaoClasse::ligarConexao();
      $conn->exec($query);
    }

    public function atualizar($id){
      $query = "update chamado set prioridade_chamado = '". $this->prioridade_chamado ."',";
      $query .= "telefone_usuario = '". $this->telefone_usuario ."', tipo_problema = '". $this->tipo_problema ."',descricao_chamado = '". $this->descricao_chamado ."' where id_chamado =" . $id;
      var_dump($query);
      $conn = \ConexaoClasse::ligarConexao();
      $conn->exec($query);
    }

    public function visualizarUm($id){
      $query = "select * from chamado where id_chamado = " . $id;
      $conn = \ConexaoClasse::ligarConexao();
      $resultado = $conn->query($query);
      $lista = $resultado->fetchAll(PDO::FETCH_ASSOC);

      return $lista;
    }

    public function visualizar($usuario){
      $query  = "select c.id_chamado, s.nome_status, c.id_usuario, c.id_status, c.numero_chamado, c.atribuicao_chamado, ";
      $query .= "c.prioridade_chamado, c.telefone_usuario, c.tipo_problema, ";
      $query .= "c.descricao_chamado, c.desc_atend_chamado, u.nome_usuario, ";
      $query .= "u.email_usuario, u.cep, u.logradouro,u.bairro,u.localidade, u.uf, ";
      $query .= "u.numero, u.senha_usuario, u.tipo_usuario ";
      $query .= "from chamado c ";
      $query .= "inner join usuario u on c.id_usuario = u.id_usuario ";
      $query .= "left join status_chamado s on c.id_status = s.id_status ";
      $query .= "where c.id_usuario = ". $usuario;

      $conn = \ConexaoClasse::ligarConexao();
      $resultado = $conn->query($query);
      $lista = $resultado->fetchAll(PDO::FETCH_ASSOC);

      return $lista;

    }

  }