<?php

require "conn.php";
$id = $_GET["id_mem"];

try{
    $sql = "DELETE FROM tb_member WHERE id_member ='$id' ";
    mysqli_query($conn,$sql);
}catch(Exception $e){
    echo "ERROR DELETE !" ; 
}