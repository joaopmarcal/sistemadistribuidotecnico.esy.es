<?php
require_once "cabecalho.php";

require_once "class/ChamadoClasse.php";

$lista = new ChamadoClasse();
$listaAtualizada = $lista->visualizar();

//print_r($listaAtualizada);
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <p>Bem vindo, <?php echo $_SESSION['nome'] ?>!! esses são os chamados atribuido a sua fila</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
<!---->
                <div class="row">

                    <table class="table text-center tabela"
                        style="background-color: #6fa7de;">
                        <thead class="">
                            <tr class=" bg-primary  ">
                                <th class="border-top-0 border-left-0 border-bottom-0 border-right border-dark">Número Do Chamado</th>
                                <th class="border-top-0 border-bottom-0 border-right border-dark">E-mail</th>
                                <th class="border-top-0 border-bottom-0 border-right border-dark">Descrição</th>
                                <th class="">Status do Chamado</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listaAtualizada as $lista): ?>
                            <tr>
                                <td><a href="visualizar_chamado.php?id=<?php print $lista['id_chamado']; ?>">M0<?php print $lista['id_chamado'] ?></a></td>
                                <td><?php print $lista['email_usuario'] ?></td>
                                <td><?php print substr($lista['descricao_chamado'],0,30) ?></td>
                                <td><?php print $lista['nome_status'] ?></td>
                                <td><a href="editar_chamado.php?id=<?php print $lista['id_chamado']; ?>">Editar</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>

    <?php

    require_once "rodape.php";