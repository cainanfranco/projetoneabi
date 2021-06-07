<!DOCTYPE html>
<?php
session_start();
include('conexao.php');
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1"></html>

<form action="acaonews.php" method="POST" enctype="multipart/form-data">
    <label>Título da notíca
        <input type="text" name="titulo">
    </label>
    <label>Autor
        <input type="text" name="autor">
    </label>
    <textarea name="noticia"></textarea>
    <input type="file" name="img">
    <button>Postar notícia</button>

</form>