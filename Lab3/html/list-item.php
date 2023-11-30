<?php
    include "conn.php" ; 

    $sql = "SELECT * FROM tb_member";

    $result = mysqli_query($conn,$sql); 

   // var_dump($result);

?>

<button id="btn_add">Add Data</button>

<table>
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
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $row["id_member"] ?></td>
            <td><?= $row["member_name"] ?></td>
            <td><?= $row["id_province"] ?></td>
            <td><button class="btn_del" data-id="<?= $row["id_member"] ?>">Delete</button></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>


<script> //JS
    $(".btn_del").click(function(){
        let id = $(this).data("id"); //id(js) -> data-id(php)
        console.log(id);

        $.ajax({
            url:"/del-item.php",
            method:"GET",
            data:{
                id_mem: id 
            },
            success:function(res){
                console.log(res);
                if(res == "error")
                alert("Can't delete item.");
                else 
                $("#div_item").load("/list-item.php");
            }
        });
    });

    $("#btn_add").click(function(){
        $("#div_item").load("/form-add.php");
    });

</script>