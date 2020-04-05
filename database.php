<?php  
    $server='localhost:3308';
    $username ='root';
    $password ='';
    $database ='login_php';

    try{
        $conn =new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    }
    catch(PDOException $error){
        die('Conexion Failed: ' . $error->getMessage());

    }
?>