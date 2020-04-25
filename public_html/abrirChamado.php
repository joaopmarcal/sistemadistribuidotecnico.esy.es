<?php
    require_once "cabecalho.php";

    if (isset($_POST['telefone'])){

        require_once "class/ChamadoClasse.php";

        $id_usuario = $_SESSION['id'];
        $id_status = 1;
        $prioridade = $_POST['prioridade'];
        $telefone = $_POST['telefone'];
        $problema = $_POST['problema'];
        $descricao = $_POST['descricao'];

        $chamado = new ChamadoClasse();
        $chamado->id_usuario = $id_usuario;
        $chamado->id_status = $id_status;
        $chamado->prioridade_chamado = $prioridade;
        $chamado->telefone_usuario = $telefone;
        $chamado->tipo_problema = $problema;
        $chamado->descricao_chamado = $descricao;
        $chamado->inserir();
        header('Location: lista_chamado.php');

    }
?>
    <section class="container">
        <h1 class="text-center">Seja bem vindo <?php echo $_SESSION['nome'] ?></h1>
        <form action="" method="post" class="">
        <div class="row">
            <div class="col-1">
                <p></p>

            </div>
        
        
            <div class="col-10">

                <div class="row mt-4">
                    <div class="col-4 mt-1  text-right">
                        <label for="Nome">Prioridade</label>
                    </div>
                    <div class=" col-4 input-group input-group-sm " id="selectAjuste">
                        <select class="form-control text-left border" name="prioridade">
                            <option value="baixa">Baixa</option>
                            <option value="media">Média</option>
                            <option value="alta">Alta</option>
                        </select>
                    </div>

                </div>
                <div class="row mt-2">

                    <div class="col-4 mt-2  text-right">
                        <label for="Nome">E-mail</label>

                    </div>
                    <div class=" col-7 input-group input-group-sm mt-1">
                        <input type="email" value="<?php echo $_SESSION['email'] ?>" class="form-control text-left border bg-white" name="email" aria-label="Exemplo do tamanho do input"
                            aria-describedby="inputGroup-sizing-sm">
                    </div>

                </div>
                <div class="row mt-3">

                    <div class="col-4 mt-2  text-right">
                        <label for="Nome">Telefone</label>

                    </div>
                    <div class=" col-7 input-group input-group-sm mt-1">
                        <input type="number" class="form-control text-left border bg-white" aria-label="Exemplo do tamanho do input"
                            aria-describedby="inputGroup-sizing-sm" name="telefone" placeholder="Telefone para contato">
                    </div>

                </div>
                <div class="row mt-4">

                    <div class="col-4 mt-2  text-right">
                        <label for="Nome">Tipo de problema</label>

                    </div>
                    <div class=" col-4 input-group input-group-sm mt-1 " id="selectAjuste">
                        <select name="problema" class="form-control text-left border">
                            <option value="hardware">Hardware</option>
                            <option value="software">Software</option>
                            <option value="impressora">Impressora</option>
                            <option value="mouse">Mouse</option>
                            <option value="teclado">Teclado</option>
                            <option value="troca-equipamento">Troca de equipamento</option>
                        </select>
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-4 mt-2 col-4 mt-2  text-right">
                        <label for="Nome">Descrição</label>
                    </div>
                    <div class="col-7">
                        <div class="form-group ">                            
                            <textarea class="form-control form-control-sm border" name="descricao" id="exampleFormControlTextarea1" rows="5"></textarea>
                          </div>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-9">

                    </div>
                    
                    <div class="col-3 ">
                        <button class="btn btn-primary text-white">Criar chamado</button>

                    </div>

                </div>
            </div>
        </form>

        <?php

        require_once "rodape.php";