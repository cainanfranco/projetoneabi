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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
                <a href="#"><i class="fa fa-calendar" aria-hidden="true" alt="Eventos"></i></i></a>
                <a href="didaticos.php"><i class="fa fa-book" aria-hidden="true" alt="Ensino"></i></a>
                <a href="index.php"><i class="fa fa-home" alt="Inicio"></i></a>
                <a class="active" href="galeria.php"><i class="fa fa-image" aria-hidden="true" alt="Galeria"></i></i></a>
                <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true" alt="Entrar"></i></a>
            </div>
            <div class="logo"><img src="imgs/LOGO.fw.png"></div>
        </nav>
    </header>
    <main class="conteudo">
        <div class="w3-row-padding w3-theme-black">
            <h1>Galeria</h1>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>