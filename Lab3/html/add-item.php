<?php

require "conn.php"; 

$id=$_POST['id'];
$name=$_POST['name'];
$prov=$_POST['prov'];

try{
    $sql = "INSERT INTO tb_member VALUES('$id','$name','$prov')";
    mysqli_query($conn,$sql);
}
catch(Exception $e){
    echo "ERROR!";
}
?>