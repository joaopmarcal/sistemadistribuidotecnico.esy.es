<?php
require_once "cabecalho.php";
?>
    <section class="container">
        <form action="" class="">
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
                                placeholder="Não da para editar, Irá ser preenchido pelo banco de dados" readonly>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4 mt-1  text-right">
                            <label for="Nome">Prioridade</label>
                        </div>
                        <div class=" col-4 input-group input-group-sm " id="selectAjuste">
                            <select class="form-control text-left border">
                                <option>Aberto</option>
                                <option>Pendente</option>
                                <option>Aguardando cliente</option>
                                <option>Resolvido</option>
                                <option>fechado</option>
                            </select>
                        </div>

                    </div>
                        <div class="row ">
                        <div class="col-4 mt-4 text-right">
                            <label for="Nome">Chamado atribuido à</label>
                        </div>
                        <div class=" col-7 input-group input-group-sm mt-3">
                            <input class="form-control text-left border bg-white" type="text" placeholder="Editável">
                        </div>

                        </div>

                    <div class="row mt-4">
                        <div class="col-4 mt-1  text-right">
                            <label for="Nome">Prioridade</label>
                        </div>
                        <div class=" col-4 input-group input-group-sm " id="selectAjuste">
                            <select class="form-control text-left border">
                                <option>Baixa</option>
                                <option>Média</option>
                                <option>Alta</option>
                            </select>
                        </div>

                    </div>
                    <div class="row mt-2">

                        <div class="col-4 mt-2 text-right">
                            <label for="Nome">Requerinte</label>
                        </div>
                        <div class=" col-7 input-group input-group-sm">
                            <input type="text" class="form-control text-left border"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Irá conter o requisitante"
                                readonly>
                        </div>

                    </div>
                    <div class="row mt-2">

                        <div class="col-4 mt-2  text-right">
                            <label for="Nome">E-mail</label>

                        </div>
                        <div class=" col-7 input-group input-group-sm mt-1">
                            <input type="text" class="form-control text-left border"
                                aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-sm"
                                placeholder="E-mail do cliente" readonly>
                        </div>

                    </div>
                    <div class="row mt-3">

                        <div class="col-4 mt-2  text-right">
                            <label for="Nome">Telefone</label>

                        </div>
                        <div class=" col-7 input-group input-group-sm mt-1">
                            <input type="text" class="form-control text-left border"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Telefone Do cliente" readonly>
                        </div>

                    </div>
                    <div class="row mt-4">

                        <div class="col-4 mt-2  text-right">
                            <label for="Nome">Tipo de problema</label>

                        </div>
                        <div class=" col-4 input-group input-group-sm mt-1 " id="selectAjuste">
                            <select class="form-control text-left border" readonly>
                                <option>Hardware</option>
                                <option>Software</option>
                                <option>Impressora</option>
                                <option>Mause</option>
                                <option>Teclado</option>
                                <option>Troca de equipamento</option>
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
                                    rows="5" placeholder="Não da para editar, Irá conter a descrição do cleinte" readonly></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-4 mt-2 col-4 mt-2  text-right">
                            <label for="Nome">Descrição de Atendimento</label>
                        </div>
                        <div class="col-7">
                            <div class="form-group ">
                                <textarea class="form-control form-control-sm border" id="exampleFormControlTextarea1"
                                    rows="5" placeholder="Técnico irá fazer sua descrição"></textarea>
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

        require_once "rodape.php";