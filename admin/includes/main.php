<?php
/**
 * Created by PhpStorm.
 * User: zza51
 * Date: 5/4/2019
 * Time: 12:45 AM
 */
?>

<script>
    $(document).ready(function () {
        var DOMAIN = "http://localhost/Florist_Site/admin";
        $('#form_poduct').on("submit", function (e) {
            var status = false;
            e.preventDefault();
            var name = $("#product_title");
            var image = $("#product_img1");
            var price = $("#product_price");
            var desc = $("#product_desc");

            if (name.val() == "" || name.val().length < 16){
                name.addClass("border-danger");
                $("#u_error").html("<span class='text-danger'>Title Should be more than 16 Char</span>")
                status = false;
            }else {
                name.removeClass("border-danger");
                $("#u_error").html("");
                status = true;
            }
            if (image.val() == ""){
                name.addClass("border-danger");
                $("#i_error").html("<span class='text-danger'>Image Required</span>")
                status = false;
            }else {
                name.removeClass("border-danger");
                $("#i_error").html("");
                status = true;
            }
            if (price.val() == ""){
                price.addClass("border-danger");
                $("#p_error").html("<span class='text-danger'>Price can't be empty</span>")
                status = false;
            }else {
                name.removeClass("border-danger");
                $("#p_error").html("");
                status = true;
            }
            if (desc.val() == "" || desc.val().length < 20){
                desc.addClass("borer-danger");
                $("#desc_error").html("<span class='text-danger'>Description Should be more than 20 Char</span>")
                status = false;
            }else {
                desc.removeClass("border-danger");
                $("#desc_error").html("");
                status = true;
            }

            $(document).ready(function(){
                $('input[type="file"]').change(function(e){
                    var fileName = e.target.files[0].name;
                    // alert('The file "' + fileName +  '" has been selected.');
                });
            });
            if (status == true && name.val().length > 16){
                $.ajax({
                    url: DOMAIN + "/includes/process.php",
                    method: "POST",
                    data: $('#form_poduct').serialize(),
                    success: function (data) {
                        if (data == "Product_inserted"){
                            alert('Product_inserted');
                        }else {
                            alert(data);
                            // alert('something wrong');
                        }
                    }
                })

            }


        })

    })
</script>
