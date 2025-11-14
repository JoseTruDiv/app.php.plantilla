<?php 

function db(){
    $PORT = '';
    $host = '';
    $username = '';
    $password = '';
    $db = '';
    $dns = "mysql:host=$host;port=$PORT;dbname=testdb";

    $pdo = new PDO($dns,$username,$password,array(

    \PDO::ATTR_EMULATE_PREPARES => false,

    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));

    return $pdo;

}