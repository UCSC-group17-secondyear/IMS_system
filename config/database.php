<?php
    $dbserver="localhost";
    $dbuser="root";
    $dbname="loginsystem";
    $dbpass="";

    /*$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $connect= new PDO('mysql:host='.$dbserver.'dbname='.$dbname,$dbuser,$dbpass, $pdo_options);
    
    if(mysqli_connect_errno()){
        die('Database connection failed. ' . mysqli_connect_error());
    }+*/

    $connect = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if($connect->connect_error){
        die("Connection failed: ");
    }
?>