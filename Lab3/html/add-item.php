<?php

require "conn.php";

$id = $_POST['id'];
$name = $_POST['name'];
$prov = $_POST['prov'];
try {
    echo $sql = "INSERT INTO tb_member VALUES('$id','$name','$prov')";
    mysqli_query($conn, $sql);
    echo "Add item by id '$id' name '$name' and prov : '$prov' Succeessfuly .";
} catch (Exception $e) {
    echo "ERROR!";
}
