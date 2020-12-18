<?php
function getConnexion()
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'projetajax';

    $dsn = "mysql:host=$host;dbname=$dbname";
    try{
        $db = new PDO($dsn, $user, $password);
    }catch (PDOException $ex){
        die('error : '.$ex->getMessage());
    }
    return $db;
}