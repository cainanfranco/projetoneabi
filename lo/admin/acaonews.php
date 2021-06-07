<?php
session_start();
include('conexao.php');
//verificar se user clicou no botao

$extensao = strtolower(substr($_FILES['img']['name'], -4));
$novo_nome = md5(time()) . $extensao;
$diretorio = "upload/";
move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome);


$titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
$autor = mysqli_real_escape_string($conexao, $_POST['autor']);
$noticia = mysqli_real_escape_string($conexao, $_POST['noticia']);


$sql = "INSERT INTO noticias (titulo, autor, noticia, img, data) VALUES ('$titulo', '$autor','$noticia', '$novo_nome', NOW())";

if (mysqli_query($conexao, $sql)) {
    //$_SESSION['medico_cadastrado'] = true;
    //header('Location: cadmedico.php');
}else {
   
    echo "Error: Não foi possivel cadastrar a médico " . $sql . "<br>" . mysqli_error($conexao);
}