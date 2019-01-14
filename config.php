<?php
session_start();

global $pdo;

$host = 'localhost';
$dbName = 'classificados';
$user = 'root';
$senha = 'root';

try {
    
 $pdo = new PDO("mysql:host=".$host.";dbname=".$dbName, $user, $senha);
    
} catch (Exception $ex) {
    echo "Erro na Conexão ".$ex->getMessage();
}