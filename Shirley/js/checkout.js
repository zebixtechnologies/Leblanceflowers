$(document).ready(function () {
    var Domain = "http://localhost/Shirley";

    $('#checkout').on("submit", function () {

        var a=5;
        var b =5;

if (a==b) {
        $.ajax({
        url: Domain + "/Includes/process.php",
        method: "POST",
        data: $("#checkout").serialize(),
        success: function (data) {
            if (data == "zohaib") {
                console.log('success');
            }else {
                // alert(data);
            }
        }
    });
}

    })
    // Manage Product
    manageProduct(1);//calling from process.php
    function manageProduct(pn) {
        $.ajax({
            url: Domain+"/Includes/process.php",
            method: "POST",
            data: {manageProduct:1},
            success: function (data) {
                $("#get_product").html(data);//from manage_brand
            }
        })
    }
    // DELETE Product
    $("body").delegate(".del_product","click",function () { //from process.php

        var did = $(this).attr("did");  //attr knwon as attribute and so we have defined out attribute did
        // alert(did);
        if (confirm("Are You Sure Of This")){
            $.ajax({
                url: Domain+"/Includes/process.php",
                method: "POST",
                data: {deleteProduct:1,id:did},
                success: function (data) {
                    if (data == "DELETED") {
                        manageProduct(1);
                    }
                    else {
                        alert(data);
                    }
                }

            })
        }
    })

    })