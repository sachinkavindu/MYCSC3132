<?php
    $servername = '127.0.0.1';
    $username = 'root';
    $password = 'mariadb';
    $database = 'web';

    try {
        $connect = mysqli_connect($servername,$username,$password,$database);
        if (!$connect) {
            die("connection failed".mysqli_connect_error());
        } 
        else {
            echo "Database is connected successfully" . "<br><br>";
        }
    } 
    catch (Exception $e) {
        die($e->getMessage());
    }
?>