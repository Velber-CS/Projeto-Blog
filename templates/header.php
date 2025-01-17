<?php 
    include_once("helpers/url.php");
    include_once("dados/posts.php");
    include_once("dados/categories.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <!-- ESTILOS DO PROJETO -->
    <link rel="stylesheet" href="<?=$BASE_URL?>/css/style.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
        <img src="<?= $BASE_URL ?>/img/logo.svg" alt="blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" target="_self" class="nav-link">Home</a></li>

                <li><a href="#" target="_self" class="nav-link">Categorias</a></li>

                <li><a href="<?= $BASE_URL ?>/contato.php" target="_self" class="nav-link">Contatos</a></li>

                <li><a href="#" target="_self" class="nav-link">Sobre</a></li>
            </ul>
        </nav>
    </header>