<?php
require_once "cabecalho.php";
require_once "class/ChamadoClasse.php";
require_once "class/UsuarioClasse.php";

    if (isset($_POST['descricao'])){
        $descricao_tecnico = $_POST['descricao'];
        $status = $_POST['status'];
        $tecnico = $_POST['tecnico'];

        $chamado_tecnico = new ChamadoClasse();
        $chamado_tecnico->desc_atend_chamado = $descricao_tecnico;
        $chamado_tecnico->id_status = $status;
        $chamado_tecnico->atribuicao_chamado = $tecnico;
        $chamado_tecnico->atualizarInformacaoTecnico($_GET['id']);

        header('Location: lista_chamado.php');

    }

$chamado = new ChamadoClasse();

$chamado_info = $chamado->visualizarUm($_GET['id']);

$tecnicos = new UsuarioClasse();

$tecnico = $tecnicos->listarTecnicos();

//var_dump($chamado_info);

//exit();


foreach ($chamado_info as $chamados){
?>
    <section class="container">
        <form action="" method="post" class="">
            <div class="row">
                <div class="col-1">
                    <p></p>

                </div>


                <div class="col-10">
                    <div class="row" style="margin-top: 50px ">
                        <div class="col-4 mt-2 text-right">
                            <label class="" for="Nome">Numero do incidente</label>
                        </div>
                        <div class="col-7 input-group input-group-sm ">
                            <input class="form-control text-left border" type="text"
                                placeholder="Não da para editar, Irá ser preenchido pelo banco de dados" value="M<?php echo $chamados['id_usuario'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4 mt-1  text-right">
                            <label for="Nome">Status</label>
                        </div>
                        <div class=" col-4 input-group input-group-sm " id="selectAjuste">
                            <select name="status" class="form-control text-left border">
                                <option value="1" <?php echo $chamados['id_status'] == "1" ? "selected" : "" ?>>Aberto</option>
                                <option value="2" <?php echo $chamados['id_status'] == "2" ? "selected" : "" ?>>Fechado</option>
                                <option value="3" <?php echo $chamados['id_status'] == "3" ? "selected" : "" ?>>Em Atendimento</option>
                                <option value="4" <?php echo $chamados['id_status'] == "4" ? "selected" : "" ?>>Aguardando Suporte</option>
                                <option value="5" <?php echo $chamados['id_status'] == "5" ? "selected" : "" ?>>Aguardando Requisitante</option>
                            </select>
                        </div>

                    </div>
                    <div class="row mt-4">

                        <div class="col-4 mt-2  text-right">
                            <label for="Nome">Atribuir ao técnico</label>

                        </div>
                        <div class=" col-4 input-group input-group-sm mt-1 " id="selectAjuste">
                            <select name="tecnico" class="form-control text-left border" readonly>
                                <?php foreach ($tecnico as $listar){ ?>
                                <option value="<?php echo $listar['id_usuario'] ?>" <?php echo  $chamados['atribuicao_chamado'] == $listar['id_usuario'] ? "selected" : "" ?>><?php echo $listar['nome_usuario'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-4 mt-1  text-right">
                            <label for="Nome">Prioridade</label>
                        </div>
                        <div class=" col-4 input-group input-group-sm " id="selectAjuste">
                            <select class="form-control text-left border">
                                <option <?php echo $chamados['prioridade_chamado'] == "baixa" ? "selected" : "" ?>>Baixa</option>
                                <option <?php echo $chamados['prioridade_chamado'] == "media" ? "selected" : "" ?>>Média</option>
                                <option <?php echo $chamados['prioridade_chamado'] == "alta" ? "selected" : "" ?>>Alta</option>
                            </select>
                        </div>

                    </div>
                    <div class="row mt-2">

                        <div class="col-4 mt-2 text-right">
                            <label for="Nome">Requerinte</label>
                        </div>
                        <div class=" col-7 input-group input-group-sm">
                            <input type="text" class="form-control text-left border"
                                aria-describedby="inputGroup-sizing-sm" value="<?php echo $chamados['nome_usuario'] ?>" placeholder="Irá conter o requisitante"
                                readonly>
                        </div>

                    </div>
                    <div class="row mt-2">

                        <div class="col-4 mt-2  text-right">
                            <label for="Nome">E-mail</label>

                        </div>
                        <div class=" col-7 input-group input-group-sm mt-1">
                            <input type="text" class="form-control text-left border"
                                aria-label="Exemplo do tamanho do input" value="<?php echo $chamados['email_usuario'] ?>" aria-describedby="inputGroup-sizing-sm"
                                placeholder="E-mail do cliente" readonly>
                        </div>

                    </div>
                    <div class="row mt-3">

                        <div class="col-4 mt-2  text-right">
                            <label for="Nome">Telefone</label>

                        </div>
                        <div class=" col-7 input-group input-group-sm mt-1">
                            <input type="text" class="form-control text-left border"
                                aria-describedby="inputGroup-sizing-sm" value="<?php echo $chamados['telefone_usuario'] ?>" placeholder="Telefone Do cliente" readonly>
                        </div>

                    </div>
                    <div class="row mt-4">

                        <div class="col-4 mt-2  text-right">
                            <label for="Nome">Tipo de problema</label>

                        </div>
                        <div class=" col-4 input-group input-group-sm mt-1 " id="selectAjuste">
                            <select class="form-control text-left border" readonly>
                                <option <?php echo $chamados['tipo_problema'] == "hardware" ? "selected" : "" ?>>Hardware</option>
                                <option <?php echo $chamados['tipo_problema'] == "software" ? "selected" : "" ?>>Software</option>
                                <option <?php echo $chamados['tipo_problema'] == "impressora" ? "selected" : "" ?>>Impressora</option>
                                <option <?php echo $chamados['tipo_problema'] == "mouse" ? "selected" : "" ?>>Mouse</option>
                                <option <?php echo $chamados['tipo_problema'] == "teclado" ? "selected" : "" ?>>Teclado</option>
                                <option <?php echo $chamados['tipo_problema'] == "troca-equipamento" ? "selected" : "" ?>>Troca de equipamento</option>
                            </select>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-4 mt-2 col-4 mt-2  text-right">
                            <label for="Nome">Descrição</label>
                        </div>
                        <div class="col-7">
                            <div class="form-group ">
                                <textarea class="form-control form-control-sm border" id="exampleFormControlTextarea1"
                                    rows="5" placeholder="Não da para editar, Irá conter a descrição do cleinte" readonly><?php echo $chamados['descricao_chamado'] ?></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-4 mt-2 col-4 mt-2  text-right">
                            <label for="Nome">Descrição de Atendimento</label>
                        </div>
                        <div class="col-7">
                            <div class="form-group ">
                                <textarea class="form-control form-control-sm border" name="descricao" id="exampleFormControlTextarea1"
                                    rows="5" placeholder="Técnico irá fazer sua descrição"><?php echo $chamados['desc_atend_chamado'] ?></textarea>
                            </div>


                        </div>
                    </div>



                    <div class="row">
                        <div class="col-9">

                        </div>

                        <div class="col-3 text-center ">
                            <button class="btn btn-primary text-white mr-4">Atualizar</button>

                        </div>

                    </div>
                </div>
        </form>

        <?php
        }

        require_once "rodape.php";