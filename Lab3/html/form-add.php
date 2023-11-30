<form>
    <label for="input_id">ID :</label>
    <input type="text" name="id" id="input_id"><br>

    <label for="input_name">NAME :</label>
    <input type="text" name="name" id="input_name"><br>

    <label for="input_prov">PROVINCH :</label>
    <input type="text" name="prov" id="input_prov"><br>

    <button type="submit">SAVE</button>
    <button type="reset">CANCLE</button>
</form>


<script>
    $("form").submit(function(e) {
        e.preventDefault();

        let fm = $(this);
        $.ajax({
            url: "/add-item.php",
            method: "POST",
            data: fm.serialize(),
            success: function(res) {
                console.log(res);

                if (res == "error")
                    alert("Don't insert data into DB.");
                else
                    $("#div_item").load("/list-item.php");
            }
        });
    });
</script>