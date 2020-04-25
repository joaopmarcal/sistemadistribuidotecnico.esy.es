<?php

    require_once "cabecalho.php";
    require_once "class/ChamadoClasse.php";

    $listar = new ChamadoClasse();
    $editar = $listar->visualizarUm($_GET['id']);

    if (isset($_POST['telefone'])){

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
        //var_dump($chamado);
        $chamado->atualizar($_GET['id']);

        header('Location: lista_chamado.php');

    }
    foreach ($editar as $editando):
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
                            <option value="baixa" <?php echo $editando['prioridade_chamado'] == "baixa" ? "selected" : "" ?>>Baixa</option>
                            <option value="media" <?php echo $editando['prioridade_chamado'] == "media" ? "selected" : "" ?>>Média</option>
                            <option value="alta" <?php echo $editando['prioridade_chamado'] == "alta" ? "selected" : "" ?>>Alta</option>
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
                        <input type="number" value="<?php print $editando['telefone_usuario'] ?>" class="form-control text-left border bg-white" aria-label="Exemplo do tamanho do input"
                            aria-describedby="inputGroup-sizing-sm" name="telefone" placeholder="Telefone para contato">
                    </div>

                </div>
                <div class="row mt-4">

                    <div class="col-4 mt-2  text-right">
                        <label for="Nome">Tipo de problema</label>

                    </div>
                    <div class=" col-4 input-group input-group-sm mt-1 " id="selectAjuste">
                        <select name="problema" class="form-control text-left border">
                            <option value="hardware" <?php echo $editando['tipo_problema'] == "hardware" ? "selected" : "" ?>>Hardware</option>
                            <option value="software" <?php echo $editando['tipo_problema'] == "software" ? "selected" : "" ?>>Software</option>
                            <option value="impressora" <?php echo $editando['tipo_problema'] == "impressora" ? "selected" : "" ?>>Impressora</option>
                            <option value="mouse" <?php echo $editando['tipo_problema'] == "mouse" ? "selected" : "" ?>>Mouse</option>
                            <option value="teclado" <?php echo $editando['tipo_problema'] == "teclado" ? "selected" : "" ?>>Teclado</option>
                            <option value="troca-equipamento" <?php echo $editando['tipo_problema'] == "troca-equipamento" ? "selected" : "" ?>>Troca de equipamento</option>
                        </select>
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-4 mt-2 col-4 mt-2  text-right">
                        <label for="Nome">Descrição</label>
                    </div>
                    <div class="col-7">
                        <div class="form-group ">
                            <textarea class="form-control form-control-sm border" name="descricao" id="exampleFormControlTextarea1" rows="5"><?php print $editando['descricao_chamado'] ?></textarea>
                          </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-9">

                    </div>

                    <div class="col-3 ">
                        <button class="btn btn-primary text-white">Editar chamado</button>

                    </div>

                </div>
            </div>
        </form>

        <?php

        endforeach;


        require_once "rodape.php";
