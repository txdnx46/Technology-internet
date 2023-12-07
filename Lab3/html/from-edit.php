<?php
include "conn.php";
$id = $_GET['id_mem'];

$sql = "SELECT * FROM tb_member WHERE id_member = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form>
    <label for="input_id">ID :</label>
    <input class="input-group mb-3" type="text" name="id" id="input_id" value="<?= $row["id_member"] ?>"><br>

    <label for="input_name">NAME :</label>
    <input class="input-group mb-3" type="text" name="name" id="input_name" value="<?= $row["member_name"] ?>"><br>

    <label for="input_prov">PROVINCE :</label>
    <input class="input-group mb-3" type="text" name="prov" id="input_prov" value="<?= $row["id_province"] ?>"><br>

    <button type="submit" class="btn btn-success mt-3">UPDATE</button>
    <button type="reset" class="btn btn-danger mt-3">CANCLE</button>
</form>

<script>
    $("form").submit(function(e) {
        e.preventDefault();

        let fm = $(this);
        $.ajax({
            url: "/edit-item.php",
            method: "POST",
            data: fm.serialize(),
            success: function(res) {
                console.log(res);
                if (res == "error")
                    alert("Error update data in  database.");
                else
                    $("#div_item").load("/list-item.php");
            }
        });
    });
</script>