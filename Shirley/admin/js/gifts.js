$(document).ready(function () {
    var DOMAIN = "http://localhost/Shirley/admin/";
    $("#form_alcohol").on("submit", function () {
        var formData=new FormData(this);
        $.ajax({
            url: DOMAIN+"includes/gifts_process.php",
            method: "POST",
            data: formData,
            success: function (data) {
                if (data == "Successfully_Inserted"){
                    window.location.href = encodeURI(DOMAIN+"/dashboard.php?dashboard=Gift Successfullt Inserted");
                }else if (data == "Something_Wrong"){
                    alert("Something_Wrong_Please_Contact_Your_Builder");
                }
            },
            cache: false,
            contentType: false,
            processData:false
        })
    })
    $("#form_chocolate").on("submit", function () {
        var formData=new FormData(this);
        $.ajax({
            url: DOMAIN+"includes/gifts_process.php",
            method: "POST",
            data: formData,
            success: function (data) {
                if (data == "Successfully_Inserted"){
                    window.location.href = encodeURI(DOMAIN+"/dashboard.php?dashboard=Gift Successfullt Inserted");
                }else if (data == "Something_Wrong"){
                    alert("Something_Wrong_Please_Contact_Your_Builder");
                }
            },
            cache: false,
            contentType: false,
            processData:false
        })
    })
    $("#form_toys").on("submit", function () {
        var formData=new FormData(this);
        $.ajax({
            url: DOMAIN+"includes/gifts_process.php",
            method: "POST",
            data: formData,
            success: function (data) {
                if (data == "Successfully_Inserted"){
                    window.location.href = encodeURI(DOMAIN+"/dashboard.php?dashboard=Gift Successfullt Inserted");
                }else if (data == "Something_Wrong"){
                    alert("Something_Wrong_Please_Contact_Your_Builder");
                }
            },
            cache: false,
            contentType: false,
            processData:false
        })
    })
    $("#form_candle").on("submit", function () {
        var formData=new FormData(this);
        $.ajax({
            url: DOMAIN+"includes/gifts_process.php",
            method: "POST",
            data: formData,
            success: function (data) {
                if (data == "Successfully_Inserted"){
                    window.location.href = encodeURI(DOMAIN+"/dashboard.php?dashboard=Gift Successfullt Inserted");
                }else if (data == "Something_Wrong"){
                    alert("Something_Wrong_Please_Contact_Your_Builder");
                }
            },
            cache: false,
            contentType: false,
            processData:false
        })
    })
});