<?php
require 'config.php';
if(empty($_SESSION['cLogin'])){
 header("location: login.php");
 exit();
}
require 'classes/Anuncios.php';
$a = new Anuncios();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $a->excluirAnuncio($_GET['id']);
}

header("location:meus-anuncios.php");