<?php
session_start();
include('admin/conexao.php');
?>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LÓ - Educativo Neabi Campus Paracuru</title>


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-amber.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="js/functions.js"></script>







</head>

<body>
<header>
        <nav id="menudesktop" class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="titulo" href="index.php">LÓ | Educativo Neabi Campus Paracuru</span>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <div class="menu1">
                    <ul class="navbar-nav mr-auto mt-4 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="eventos.php">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="galeria.php">Galeria</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="didaticos.php" id="materiais">Materiais Didáticos</a>
            <a href="socioambien.php" id="socioAmb">Questões Socioambientais</a>
            <a href="cultura.php" id="cultura">Cultura</a>
            <a href="sobre.php" id="sobre">Sobre</a>
        </div>
        <nav class="menu">
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="galeria.php">Galeria</a>
                    <a href="cultura.php">Cultura</a>
                    <a href="eventos.php">Eventos</a>
                    <a href="didaticos.php">Materiais Didáticos</a>
                    <a href="socioambien.php">Questões Socioambientais</a>
                    <a href="ensino.php">Ensino e relações étnico raciais</a>
                    <a href="sobre.php">Quem somos</a>
                    <a href="#" onclick="openForm()">Entrar</a>
                </div></a>
                <div class="form-popup" id="myForm">
                    <form action="/action_page.php" class="form-container">
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                        <label for="psw"><b>Senha</b></label>
                        <input type="password" placeholder="Senha" name="psw" required>
                        <button type="submit" class="btn">Entrar</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>
                    </form>
                </div>
            </div>
            <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <div class="icon-bar">
                <a href="eventos.php"><i class="fa fa-calendar" aria-hidden="true" alt="Eventos"></i></i></a>
                <a class="active" href="didaticos.php"><i class="fa fa-book" aria-hidden="true" alt="Ensino"></i></a>
                <a href="index.php"><i class="fa fa-home" alt="Inicio"></i></a>
                <a href="galeria.php"><i class="fa fa-image" aria-hidden="true" alt="Galeria"></i></i></a>
                <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true" alt="Entrar"></i></a>
            </div>
            <div class="logo"><img src="imgs/LOGO.fw.png"></div>
        </nav>
    </header>
    <main class="conteudo">

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Guia de sugestões</h4>

            <hr>
            <p> Estudos das relações étnico-raciais de A á Z</p>
        </div>




        <h3></h3>

        <button class="accordion">A</button>
        <div class="panel">
            <h4>A HISTÓRIA DA EDUCAÇÃO DOS NEGROS NO BRASIL</h4>
            <p>Autores: Marcus Vinícius Foncesca e Surya Aaronovich Pombo de Barros (org.)
                Dados da Publicação: Niteroi, EdUFF, 2016.
            </p>
            <hr>
            <h4>A GUERRA DOS BÁRBAROS</h4>
            <p>Autores: Afonso d´Escragnolle Tauany.
                Dados da Publicação: -
            </p>
            <hr>
            <h4>A CATEGORIA POLÍTICO-CULTURAL AMEFRICANIDADE </h4>
            <p>Autor: Leila Gonzalez
                Dados da Publicação: Rio de Janeiro, Tempo Brasileiro, 1988.
            </p>
            <hr>
            <h4>AGROFLORESTANDO O MUNDO DE FACÃO A TRATOR</h4>
            <p>Autores: Nelson Eduardo Corrêa Neto; Walter Steenbock et al.
                Dados da Publicação: Petrobras, 2016.
            </p>
            <hr>
            <h4>A COR PÚRPURA </h4>
            <p>Autor: Alice Walker.
                Dados da Publicação: -
            </p>
            <hr>
            <h4>A LIBERDADE É UMA LUTA CONSTANTE</h4>
            <p>Autor: Angela Davis, Frank Barat (Org.)
                Dados da Publicação: Boitempo.
            </p>
            <hr>
            <h4>ATLAS DO AGRONEGÓCIO: FATOS E NÚMEROS SOBRE AS CORPORAÇÕES QUE CONTROLAM O QUE COMEMOS </h4>
            <p>Autor: Maureen Santos et al. (org.)
                Dados da Publicação: Fundação Heinrich, Rio de Janeiro, 2018.
            </p>
            <hr>
            <h4>A CRUEL PEDAGOGIA DO VÍRUS
            </h4>
            <p>Autor: Boaventura de Sousa Santos.
                Dados da Publicação: Almedina, 2020.</p>
            <hr>
            <h4>A LÍNGUA DAS ORIGENS DA CIVILIZAÇÃO AMAZÔNICA
            </h4>
            <p>
                Autor: Eduardo de Almeida Novarro.
                Dados da Publicação: São Paulo, 2011.</p>
            <hr>

            <h4>A DINÂMICA AGRÁRIA DO BAIXO JAGUARIBE/CE
            </h4>
            <p>Autor: Leandro Vieira Cavalcante, Maria Tamires Teotônio Lima
                Dados da Publicação: Na terra, Uece, 2018.
            </p>
            <hr>
        </div>

        <button class="accordion">B</button>
        <div class="panel">
            <h4>BROBO A LINGUA ANCESTRAL XUKURU</h4>
            <p>Autor: Ridivanio P. da Silva.
                Dados da Publicação: -
            </p>
            <hr>
            <h4>BRINCADEIRAS AFRICANAS PARA A EDUCAÇÃO CULTURAL</h4>
            <p>Autor: Débora Alfaia da Cunha
                Dados da Publicação: Pará, 2016

            </p>
            <hr>


        </div>

        <button class="accordion">C</button>
        <div class="panel">
            <h4>CAMINHOS E ENCONTROS NA EDUCAÇÃO DE INDÍGENAS</h4>
            <p>Autor: Witembergue Gomes Zaparoli
                Dados da Publicação: Ethos Editora, 2017.
            </p>
            <hr>
            <h4>Autor: Witembergue Gomes Zaparoli
                Dados da Publicação: Ethos Editora, 2017.
            </h4>
            <p> Autores: Kariri-Xocó et al.
                Dados da Publicação: Thydewa, 2013.
            </p>
            <hr>
            <h4>CAPITALISMO DEPENDENTE E CLASSES SOCIAIS NA AMÉRICA LATINA</h4>
            <p>Autor: Florestan Fernandes
                Dados da Publicação: Zahar Editores, Rio de Janeiro, 2004.
            </p>
            <hr>
            <h4>CASA DE ALVENARIA: DIÁRIO DE UMA EX-FAVELADA</h4>
            <p>Autor: Carolina Maria de Jesus
                Dados da Publicação: Editora Paulo de Azevedo, Rio de Janeiro, 1961.
            </p>
            <h4>CASA GRANDE & SENZALA</h4>
            <p>CASA GRANDE & SENZALA</p>
            <h4>CAROLINA MARIA DE JESUS: ANTOLOGIA PESSOAL</h4>
            <p>Autor: José Carlos Sebe (org.)
                Dados da Publicação: Editora UFRJ, 1996.
            </p>
            <h4>COMO CULTIVAR ALIMENTOS PLANTANDO FLORESTAS: HISTÓRIAS DE PESSOAS, FLORES E ROÇAS</h4>
            <p>Autor: Secretaria do meio ambiente – BA
                Dados da Publicação: 2017.
            </p>
        </div>

        <button class="accordion">D</button>
        <div class="panel">
            <h4>DO TEMPO</h4>
            <p>Autor: Ailton Krenak
                Dados da Publicação: -
            </p>
            <hr>
            <h4>DIÁRIO DE BITITA</h4>
            <p>Autor: Carolina Maria de Jesus
                Dados da Publicação: Editora Nova Fronteira, 1986
            </p>
            <hr>
            <h4>DECOLONIALIDADE E SOCIOLOGIA NA AMÉRICA LATINA</h4>
            <p>Autor: Edna Castro e Renan Freitas (Org)
                Dados da Publicação: Nada Editora, 2018.
            </p>
            <hr>
            <h4>DEMOCRACIA EM COLAPSO?</h4>
            <p>Autor: Marilena Chaui, Luis Felipe Miguel.
                Dados da Publicação: Sesc.
            </p>
            <hr>

        </div>
        <button class="accordion">E</button>
        <div class="panel">
            <h4>EU SOU ATLÂNTICA: SOBRE A HISTÓRIA DE VIDA DE BEATRIZ NASCIMENTO</h4>
            <p>Autor: Alex Ratts
                Dados da Publicação: São Paulo, 2006.
            </p>
            <hr>
            <h4>EDUCAÇÃO E LIBERTAÇÃO: A PERSPECTIVA DAS MULHERES NEGRAS</h4>
            <p>Autor: Angela Davis.
                Dados da Publicação: Boitempo.
            </p>
            <hr>
            <h4>ENSINANDO A TRANSGREDIR: A EDUCAÇÃO COMO PRÁTICA DA LIBERDADE</h4>
            <p>Autor: Bell Hooks.
                Dados da Publicação: São Paulo, 2013.
            </p>
            <hr>
            <h4>ESTUDOS AFRICANOS</h4>
            <p>Autor: Fábio Feltrin et al. (Org)
                Dados da Publicação: 2016.
            </p>
            <hr>
        </div>

        <button class="accordion">F</button>
        <div class="panel">
            <h4>FREUD: O FUTURO DE UMA ILUSÃO</h4>
            <p>Autor: Paulo Endo e Edson Sousa
                Dados da Publicação: LPM
            </p>
            <hr>
            <h4>Formações nacionais de classe e raça. </h4>
            <p>Autor(es): Antonio Sérgio Alfredo Guimarães.
                Dados da Publicação : USP, 2016.
            </p>
            <hr>

        </div>

        <button class="accordion">G</button>
        <div class="panel">
            <h4>GRAMÁTICA PEDAGÓGICA DA LÍNGUA APINAJÉ</h4>
            <p>>Autor: Francisco Edviges
                Dados da Publicação: PUC, 2011</p>
            <hr>
            <h4>GEOGRAFIA DA FOME
            </h4>
            <p>Autor: Josué de Castro
                Dados da Publicação: Editora Antares
            </p>
            <hr>

        </div>

        <button class="accordion">H</button>
        <div class="panel">
            <h4>HISTÓRIAS DA ÁFRICA E DOS AFRICANOS</h4>
            <p>Autor: Paulo Fagundes et al.
                Dados da Publicação: Editora Vozes, 2013.
            </p>
            <hr>
            <h4>HISTÓRIAS AFRICANAS E AFRO-BRASILEIRAS</h4>
            <p>Autor: Fábio Feltrin de Souza (org.)
                Dados da Publicação: 2016.
            </p>
            <hr>
            <h4>HISTÓRIAS DA EDUCAÇÃO DIFERENCIADA TREMEMBÉ</h4>
            <p>HISTÓRIAS DA EDUCAÇÃO DIFERENCIADA TREMEMBÉ</p>
            <hr>

        </div>
        <button class="accordion">I</button>
        <div class="panel">
            <h4>IDÉIAS PARA ADIAR O FIM DO MUNDO</h4>
            <p>Autor: Ailton Krenak.
                Dados da Publicação: Companhia das Letras.
            </p>
            <hr>
            <h4>INTELECTUAIS NEGRAS

            </h4>
            <p>Autor: Bell Hooks
                Dados da Publicação: -</p>
            <hr>
            <h4>Índios no Brasil: história, direitos e cidadania.

            </h4>
            <p>Autor(es):Manuela Carneiro da Cunha,.
                Dados da publicação: São Paulo: Claro Enigma, 2012.</p>
            <hr>
        </div>
        <button class="accordion">J</button>
        <div class="panel">
            <h4>JOGOS E BRINCADEIRAS INDÍGENAS</h4>
            <p>Autor(es): Lilia Marcia et al
                Dados da publicação: 2014.
            </p>
            <hr>
            <h4>JOGOS/BRINCADEIRAS INDÍGENAS: A MEMÓRIA LÚDICA DE ADULTOS E IDOSOS DE DEZOITO GRUPOS ÉTNICOS</h4>
            <p>Autor: Beleni Salete et al
                Dados da Publicação: -
            </p>
            <hr>
        </div>
        <button class="accordion">L</button>
        <div class="panel">
            <h4>LUGAR DE NEGRO</h4>
            <p>Autor: Leila Gonzalez
                Dados da Publicação: Rio de Janeiro, 1982.
            </p>
            <hr>
            <h4>Línguas brasileiras. Para o conhecimento das línguas indígenas. </h4>
            <p>Autor(es): Aryon Dall’Igna Rodrigues.
                Dados da publicação: São Paulo: Loyola. 1986.
            </p>
            <hr>
        </div>
        <button class="accordion">M</button>
        <div class="panel">
            <h4>MULHERES, RAÇA E CLASSE</h4>
            <p>Autor: Angela Davis.
                Dados da Publicação: BoItempo. 2016.
            </p>
            <hr>
            <h4>MEMÓRIAS DO MOVIMENTO INDÍGENA NO NORDESTE</h4>
            <p>Autor: Gabriela Saraiva de Mello et al. (org)
                Dados da Publicação: 2015
            </p>
            <hr>
            <h4>MULHERES INDÍGENAS DA TRADIÇÃO</h4>
            <p>Autor: Caroline Leal Mendonça et Al.
                Dados da Publicação: -
            </p>
            <hr>
            <h4>MULHERES QUE CORREM COM OS LOBOS</h4>
            <p>Autor: Clarissa Pinkola Estes
                Dados da Publicação: Rocco, Rio de Janeiro, 1999.
            </p>
            <hr>
        </div>
        <button class="accordion">N</button>
        <div class="panel">
            <h4>NECROPOLÍTICA</h4>
            <p>Autor: Achille Mbembe.
                Dados da Publicação: Lusana, 2015.
            </p>
            <hr>
            <h4>Autor: Achille Mbembe.
                Dados da Publicação: Lusana, 2015.
            </h4>
            <p>Autor(es): K. Munanga.
                Dados da publicação: São Paulo: Ática, 1986.
            </p>
            <hr>
            <h4>NÃO SOU EU UMA MULHER. MULHERES NEGRAS E O FEMINISMO.</h4>
            <p>Autor: Bell Hooks
                Dados da Publicação: Rio de Janeiro, 2014.
            </p>

        </div>
        <button class="accordion">O</button>
        <div class="panel">
            <h4>O QUILOMBISMO </h4>
            <p>Autor: Abdias do Nascimento
                Dados da Publicação: Petropolis, 1980.</p>
            <hr>
            <h4>O AMANHÃ NÃO ESTÁ À VENDA</h4>
            <p>Autor: Ailton Krenak
                Dados da Publicação: Companhia das Letras.
            </p>
            <hr>
            <h4>O FEMINISMO É PARA TODO MUNDO: POLÍTICAS ARREBATADORAS</h4>
            <p>Autor: Bell Hooks
                Dados da Publicação: Rosa dos Tempos, Rio de Janeiro, 2018.
            </p>
            <hr>
            <h4>O NEGRO NO MUNDO DOS BRANCOS</h4>
            <p>Autor: Florestan Fernandes
                Dados da Publicação: São Paulo, 1972.
            </p>
            <hr>
            <h4>O TUPI NA GEOGRAFIA NACIONAL</h4>
            <p>Autor: Teodoro Sampaio
                Dados da Publicação: Editora Nacional, 1987.
            </p>
            <hr>
            <h4>O QUE É RACISMO ESTRUTURAL?</h4>
            <p>Autor: Silvio Almeida
                Dados da Publicação: Letramento, 2018.
            </p>
            <hr>
        </div>
        <button class="accordion">P</button>
        <div class="panel">
            <h4>POLÍTICAS DA INIMIZADE</h4>
            <p>Autor: Achille Mbembe.
                Dados da Publicação: Antígona, 2016.
            </p>
            <hr>
            <h4>PEDAÇOS DA FOME</h4>
            <p>Autor: Carolina Maria de Jesus
                Dados da Publicação: Editora Aquila, São Paulo, 1963.

            </p>
            <hr>
            <h4>PROVÉRBIOS</h4>
            <p>Autor: Carolina Maria de Jesus
                Dados da Publicação: 1963.
            </p>
            <hr>
            <h4>PEQUENO VOCABULÁRIO TUPI-PORTUGUÊS</h4>
            <p>Autor: Lemos Barbosa
                Dados da Publicação: Rio de Janeiro, 1951.
            </p>
            <hr>
            <h4>PETRAGOGIA</h4>
            <p>Autor: Sandra Haydee
                Dados da Publicação: EdUECE, Fortaleza, 2015.
            </p>
            <hr>
            <h4>PRÁTICAS PEDAGÓGICAS DE RESISTÊNCIA</h4>
            <p>Autor: Aldenora Conceição de Macedo
                Dados da Publicação: Editora FI, 2019.
            </p>
            <hr>
        </div>
        <button class="accordion">Q</button>
        <div class="panel">
            <h4>QUARTO DE DESPEJO</h4>
            <p>Autor: Carolina Maria de Jesus
                Dados da Publicação: 1960.
            </p>
            <hr>
            <h4>QUE TIPO DE REPÚBLICA?</h4>
            <p>Autor: Florestan Fernandes
                Dados da Publicação: Editora Brasiliense, 1986.
            </p>
            <hr>
            <h4>QUILOMBOS BRASILEIROS: ALGUNS ASPECTOS DA TRAJETÓRIA DO NEGRO NO BRASIL</h4>
            <p>Autor: Giselda Shirley
                Dados da Publicação: Revista Mosaico, 2014.
            </p>
            <hr>


        </div>
        <button class="accordion">R</button>
        <div class="panel">
            <h4>RASURAS EPISTÊMICAS DAS (EST)ÉTICAS NEGRAS CONTEMPORÂNEAS </h4>
            <p>Autores: Ana Lúcia Silva Souza et al (Org.)
                Dados de Publicação: Grupo Rasuras, Salvador, 2020.
            </p>
            <hr>
            <h4>RAÇA E DIVERSIDADE</h4>
            <p>Autor(es): Renato da Silva Queiroz; Lilia Moritz Schwarcz (Orgs).
                Dados da publicação: São Paulo: Edusp, 1996.
            </p>
            <hr>
            <h4>RACISMO LINGUÍSTICO</h4>
            <p>Autor: Gabriela Nascimento
                Dados da Publicação: Belo Horizonte, Editora Letramento, 2019.
            </p>
            <hr>


        </div>
        <button class="accordion">S</button>
        <div class="panel">
            <h4>SISTEMAS AGROECOLÓGICOS E AGROFLORESTAIS EM ASSENTAMENTOS DA REFORMA AGRÁRIA</h4>
            <p>Autores: -
                Dados de Publicação: -
            </p>
            <hr>
            <h4>SUPERANDO O RACISMO NA ESCOLA </h4>
            <p>Autor(es): K. Munanga. (Org).
                Dados da publicação: Brasília: Ministério da Educação, SECAD, 2005
            </p>
            <hr>


        </div>
        <button class="accordion">T</button>
        <div class="panel">
            <h4>TECNOLOGIAS PARA A AGRICULTURA FAMILIAR</h4>
            <p>Autores: Milton Parron Padovan
                Dados de Publicação: 2014
            </p>
            <hr>
            <h4>Tupis, Tapuias e Historiadores: Estudos de História Indígena e do Indigenismo.</h4>
            <p>Autor(es): John Manuel Monteiro
                Dados da publicação: UNICAMP, 2001.
            </p>
            <hr>
            <h4>TORNA-SE NEGRO</h4>
            <p>Autor: Neusa Santos Souza
                Dados da Publicação: Editora Graal, 1983.
            </p>
            <hr>


        </div>
        <button class="accordion">U</button>
        <div class="panel">
            <h4>UM DEFEITO DE COR</h4>
            <p>Autor: Ana Maria Gonçalves
                Dados da Publicação: Editora Record, Rio de Janeiro, 2009.
            </p>
            <hr>
            <h4>Um Enigma Masculino: Interrogando a Masculinidade da Desigualdade Racial no Brasil</h4>
            <p>Autor(es): Osmundo Pinho
                Dados da publicação: 2014.
            </p>
            <hr>


        </div>
        <button class="accordion">V</button>
        <div class="panel">
            <h4>Valores civilizatórios em sociedades negro-africanas. </h4>
            <p>Autor: Fábio Leite.
                Dados da publicação: USP, 2000.
            </p>
            <hr>
            <h4>VIVENCIANDO OS JOGOS E BRINCADEIRAS INDÍGENAS NA EDUCAÇÃO INFANTIL</h4>
            <p>Autor: Elizabete Cândido et al
                Dados da Publicação: -
            </p>
            <hr>


        </div>

        <button class="accordion">X</button>
        <div class="panel">
            <h4>XANGÔ-AGOJO RAÍZES DA CULTURA NAGÔ NO SEMI-ÁRIDO NORDESTINO</h4>
            <p>Autor: Alexandro dos Santos et al.
                Dados da Publicação: -

            </p>
            <hr>



        </div>
        <button class="accordion">Z</button>
        <div class="panel">
            <h4>Zumbi dos Palmares: a afroresiliencia</h4>
            <p>Autor: Josué Petrônio
                Dados da Publicação: 2017.

            </p>
            <hr>



        </div>



        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>



    </main>
    <footer>

    </footer>
</body>

</html>