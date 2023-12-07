<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $prov = $_POST['prov'];

    try {
        $sql = "UPDATE tb_member SET member_name='$name', id_province='$prov' WHERE id_member='$id'";
        mysqli_query($conn, $sql);
        echo "Updated data new name is '$name' and prov'$prov' successfuly ";
    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "error update";
}
?>
