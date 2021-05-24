<?php
    //connect to a database
    $dsn = "mysql:host=localhost;dbname=sms;charset=utf8mb4";
    $password = "";
    $username = "root";

    //try the connection
    try{
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connection successfull";
    } catch (Exception $e) {
        //throw $th;
        echo "Connection failed".$e->getMessage();
    }


?>