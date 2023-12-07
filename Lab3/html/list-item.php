<?php
include "conn.php";

$sql = "SELECT * FROM tb_member";

$result = mysqli_query($conn, $sql);

// var_dump($result);

?>

<button id="btn_add" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Add</button>
<table class="table table-hover">

    <thead>
        <tr>
            <th>ID MEMBER</th>
            <th>NAME</th>
            <th>PROVINCE</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row["id_member"] ?></td>
                <td><?= $row["member_name"] ?></td>
                <td><?= $row["id_province"] ?></td>
                <td><button class="btn_del btn btn-danger" data-id="<?= $row["id_member"] ?>">Delete</button></td>
                <td><button class="btn_edit btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?= $row['id_member'] ?>">Edit</button>
                </td>

            </tr>

        <?php
        }
        ?>
    </tbody>
</table>


<script>
    //JS
    //delete 
    $(".btn_del").click(function() {
        let id = $(this).data("id"); //id(js) -> data-id(php)
        $.ajax({
            url: "/del-item.php",
            method: "GET",
            data: {
                id_mem: id
            },
            success: function(res) {
                console.log(res);
                if (res == "error")
                    alert("Can't delete item.");
                else {
                    $("#div_item").load("/list-item.php");
                }

            }
        });
    });


    //add insert
    $("#btn_add").click(function() {
        //$("#div_item").load("/addform.php");
        $("#staticBackdropLabel").text("ADD ITEM");
        $(".modal-body").load('/form-add.php');
        $(".modal-footer").hide();
    });

    $(".btn_edit").click(function() {
        let id = $(this).data("id");
        //$("#div_item").load("/addform.php");
        $("#staticBackdropLabel").text("EDIT ITEM");
        $(".modal-body").load(`from-edit.php?id_mem=${id}`);
        $(".modal-footer").hide();
    });




    //dit  update
    /*$("#btn_edit").click(function(){
        let id = $(this).data("id");
       
        $.ajax({
            url: "/from-edit.php",
            method: "GET",
            data: {
                id_mem: id
            },
            success: function(res) {
                $("#div_item").html(res); 
                if(res == "error") console.log("Error Updated Data");   
            }
            
        });
        });*/
</script>