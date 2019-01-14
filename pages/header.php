<?php require 'config.php'?>
<html>
    <head>
        <title>Classificados</title>
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
        <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>        
        
    </head>
    <body>

        <nav class="navbar navbar-dark bg-dark navbar-expand ">
            <div class="container-fluid">
                <div class="navbar-nav">
                    <a href="./" class="navbar-brand nav-link">Classificados</a>
                </div>
                
                <ul class="navbar-nav navbar-expand-sm">
                   <?php 
                    if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])){?>
                        <li><a class="nav-link" href="meus-anuncios.php">Meus Anúncios</a></li>
                        <li><a class="nav-link" href="sair.php">Sair</a></li>    
                    <?php
                    }else{ ?>
                        <li><a class="nav-link" href="cadastre-se.php">Cadastre-se</a></li>
                        <li><a class="nav-link" href="login.php">Login</a></li>    
                    <?php
                     }
                   
                   ?>
                                  
                </ul>                
            </div>      
        </nav>