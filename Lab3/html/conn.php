<?php
    $host = "db";
    $username = "root";
    $password = "1234";
    $db = "internet";

    try{
        $conn = mysqli_connect($host,$username,$password,$db);
        mysqli_query($conn,"SET NAMES utf8");
    }
    catch(Exception $e){
        echo $e->getMessage();
        error_log($error);
        echo $error  ;
        echo "Error Database Connected... " ; 
    }

?>