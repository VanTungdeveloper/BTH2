<?php
    const DATABASE_SERVER = "localhost";
    const DATABASE_USER = "root";
    const DATABASE_PASSWORD = "";
    const DATABASE_NAME = "BTTH02_1";
    $connect = null;

    try {
        $connect = new PDO("mysql:host=".DATABASE_SERVER.";dbname=".DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
        $connect = null;
    }
