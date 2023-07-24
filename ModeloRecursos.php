<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <div class="page-title">
                <hr>
                <!-- Título -->
                <h2 class="Titulo">Titulo Teste</h2>
                <hr>
                <!-- Sub Título -->
                <p class="SubTitulo">Sub_Titulo Teste</p>
                <hr>
                <!-- Sub Sub Título -->
                <p class="SubSubTitulo">Sub_Sub_Titulo Teste</p>
                <hr>
                <!-- Texto -->
                <p class="Texto">Texto Normal</p>
                <hr>

                <!-- Figura do lado do texto-->

                <div class="row ">
                    <div class="col-md-6">
                        <p class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                            Se não podemos possuir o <a href="#" data-toggle="tooltip" data-placement="top" title="A representação do SGD enquanto engrenagens, destaca ainda, a equidade na relevância dos órgãos e serviços, deixando evidente que todos são importantes para a manutenção das ações. O manômetro evidencia a necessidade do monitoramento e há a visão de um “cabo de força” ligando a execução aos recursos, com um movimento literalmente regado por integração, profissionalismo e compromisso.">representação gráfica das engrenagens<i class="fa fa-search-plus"></i></a> máximo grau de inteligência nos nove tipos citados acima, talvez você tenha se questionado quais deles você deveria optar por desenvolver, ou seja, quais desses tipos de inteligência dão mais vantagens aos indivíduos?
                        </p>
                    </div>
                    <div class="col-md-6">
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura img-fluid wow fadeInLeft"><strong>Fonte :</strong>CEDIS</p>
                            </a>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura img-fluid wow fadeInLeft"><strong>Figura 01 :</strong>CEDIS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End -->
                    </div>
                </div>
                <!--Fim figura/texto div-->

                <!-- Titulo Figura -->
                <div class="text-center">
                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                    </a>
                    <p class="FonteFigura">Figura 1: Nome da figura</p>
                </div>

                <!-- Imagem 01 - MODAL -->
                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer text-center">
                                <p class="TituloFigura"><strong>Fonte :</strong> Fonte da imagem</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Figura 01 - End -->

                <!-- Importante -->
                <div class="ImportanteCaixa">
                    <p class="ImportanteTitulo"> Importante</p>
                    <div class="ImportanteTexto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
                <hr>

                <!-- Fique Atento -->
                <div class="FiqueAtentoCaixa">
                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                    <div class="FiqueAtentoTexto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr</p>
                    </div>
                </div>
                <hr>

                <!-- Curiosidade -->
                <div class="CuriosidadeCaixa">
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <div class="CuriosidadeTexto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr</p>
                    </div>
                </div>

                <hr>
                <!-- Atividade -->

                <div class="AtividadeCaixa">
                    <p class="AtividadeTitulo"> Atividade</p>
                    <div class="AtividadeTexto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                    </div>
                </div>
                <hr>
                <!-- Exemplo -->

                <div class="ExemploCaixa">
                    <p class="ExemploTitulo"> Exemplo</p>
                    <div class="ExemploTexto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                    </div>
                </div>
                <hr>


                <!-- Pratique -->

                <div class="PratiqueCaixa">
                    <p class="PratiqueTitulo"> Pratique</p>
                    <div class="PratiqueTexto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                    </div>
                </div>

                <hr>

                <!-- Saiba Mais -->
                <div class="SaibaMaisCaixa">
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <div class="SaibaMaisTexto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit</p>
                    </div>
                </div>

                <!-- Dúvida  -->
                <div class="DuvidaCaixa">
                    <p class="DuvidaTitulo"> Dúvida</p>
                    <div class="DuvidaTexto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                    </div>
                </div>

                <!-- Reflita -->

                <div class="ReflitaCaixa">
                    <p class="ReflitaTitulo"> Reflita</p>
                    <div class="ReflitaTexto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <!--Redução de colunas-->
        <div class="row">
            <div class="col-md-6 col-sm-12">

                <p>Vida Profissional:</p>

                <table class="table table-bordered border-success">
                    <tbody>
                        <tr>
                            <td colspan="4">Objetivo:</td>
                        </tr>
                        <tr>
                            <td colspan="4">Quando: [ ] curto prazo [ ] médio prazo [ x ] longo prazo</td>
                        </tr>
                        <tr>
                            <td colspan="4">legado</td>
                        </tr>
                    </tbody>
                </table><br>
            </div>

            <div class="col-md-6 col-sm-12">
                <p>Vida Profissional:</p>

                <table class="table table-bordered border-success">
                    <tbody>
                        <tr>
                            <td colspan="4">Objetivo:</td>
                        </tr>
                        <tr>
                            <td colspan="4">Quando: [ ] curto prazo [x ] médio prazo [ ] longo prazo</td>
                        </tr>
                        <tr>
                            <td colspan="4">legado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Fim  Reducao de Coluna -->

        <!--Alerta -->

        <div class="alert alert-success" role="alert">texto
        </div>

        <!--Fim Alerta -->



        <hr>
        <!--INÍCIO CONTEUDO PARTE 02-->
        <section id="pt2">
            <div class="bg-cinzaAzul container-fluid main-content">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <p class="caixa">
                        <h4 class="wow fadeIn" data-wow-delay="0.6s">Foi em 1990 que começaram as pesquisas sobre o BSC em diversas empresas americanas, desenvolvidas pelo instituto Nolan Norton tendo como idealizadores <a href="https://pt.wikipedia.org/wiki/David_P._Norton" target="_blank"> David Norton </a> e <a href="https://pt.wikipedia.org/wiki/Robert_Kaplan" target="_blank">Robert Kaplan </a> .</h4>
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>
        <hr>
        <!-- Accordion Fase 01 - Begin  -->

        <div class="accordion accordion-flush" id="AccordionFase01">

            <!-- Sub Título -->

            <p class="SubTitulo">Clique nos títulos abaixo para mais informações</p>
            <div class="accordion-item">
                <h2 class="accordion-header" id="Item01">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <strong>Accountability Vertical</strong>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                    <div class="accordion-body">
                        <p>Texto</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item Texto">
                <h2 class="accordion-header" id="Item02">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <strong>Accountability Horizontal</strong>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                    <div class="accordion-body">
                        <p>
                            Texto
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="Item03">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <strong>Accountability Social </strong>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                    <div class="accordion-body">
                        <p> texto

                        </p>
                    </div>
                </div>
            </div>
        </div><br><br>

        <!-- FIM Accordion Fase 01 - Begin  -->



        <!-- Nota de Rodapé -->
        <p class="NotaDeRodape"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        <hr>


        <!-- LISTA EM MOVIMENTO-->
        <div>
            <ul class="none">
                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est obcaecati iure error soluta quis, culpa quasi amet maiores ab eum quaerat sit nobis. Ad asperiores laboriosam esse ex repellat. Accusantium.</li>

            </ul>
        </div>

        <!-- FIM LISTA EM MOVIMENTO-->

        <!-- Marcadores -->

        <p><i class="fa fa-dot-circle CorAzulEstado01"></i> <strong>texto

            </strong> texto</p>

        <p class="Texto"><i class="fa fa-arrow-alt-circle-right CorAzulEstado01"></i> <strong>texto</p>

        <p class="Texto"><i class="fa fa-check-circle CorAzulEstado01"></i> <strong>texto</p>
        <!-- Circulo Verde-->
        <i class="fas fa-dot-circle CorVerdeClaroEstado"></i> texto

        <li class="img-fluid wow fadeInLeft" data-wow-delay="5.9s"><i class="fa fa-cog CorVerdeClaroEstado"></i> Dados com restrições de licença, ou seja, que não podem ser livremente compartilhados.</li>


        <hr>

        <!-- CITAÇÃO -->
        <div class="bd-callout bd-callout-info">
            <p>
                "sensibilizar o cidadão para a função socioeconômica do tributo e de sua responsabilidade pelo acompanhamento da aplicação dos recursos públicos por meio do exercício do controle social e do conhecimento sobre a administração"
            </p>
            <footer class="blockquote-footer">PEF</footer>
        </div>
    </div>
    <!-- Botões de navegação -->
    <div class="text-center">
        <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
        <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
    </div><br>

    <!-- mouseover -->
    <a href="#" data-toggle="tooltip" data-placement="top" title="Texto fica aqui">textos<i class="fa fa-search-plus"></i></a>

    <!-- SCRIPT LIGHTBOX -->
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        $(".wow").addClass("fadeInUp");
    </script>

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>