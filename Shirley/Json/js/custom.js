jQuery(document).ready(function () {
    var countryOp;
    var StateOp;
    $.getJSON('countries.json', function (resultData) {
        $.each(resultData, function (i, countryName) {
            // alert(countryName.name + "," + countryName.code);
            countryOp +="<option value='"+countryName.code+"'>"+countryName.name+"</option>";
        })
        $("#country").html(countryOp);
    })

    $("#country").change(function () {
        if ($(this).val()=="AU") {
            $.getJSON('au-states.json', function (result) {
                $.each(result, function (stateCode, stateName) {
                    StateOp += "<option value='"+stateCode.abbreviation+"'>" +stateName.name+ "</option>";
                })
                $("#state1").html(StateOp);
            })
        }
    })

    $("#country").change(function () {
        if ($(this).val()=="CN") {
            $.getJSON('china-states.json', function (result) {
                $.each(result, function (stateCode, stateName) {
                    StateOp += "<option value='"+stateCode+"'>" +stateName.name+ "</option>";
                })
                $("#state1").html(StateOp);
            })
        }
    })
    $("#country").change(function () {
        if ($(this).val()=="VN") {
            $.getJSON('Vietnam-states.json', function (result) {
                $.each(result, function (stateCode, stateName) {
                    StateOp += "<option value='"+stateCode+"'>" +stateName.name+ "</option>";
                })
                $("#state1").html(StateOp);
            })
        }
    })
    $('#country').change(function () {
        if ($(this).val()=='JP'){
            $.getJSON('japan-states.json', function (result) {
                $.each(result,function (i,states) {
                    StateOp += "<option value='"+i+"'>"+states.name+"</option>";
                })
                $('#state1').html(StateOp);
            })
        }
    })
    $('#country').change(function () {
        if ($(this).val()=='JP'){
            $.getJSON('japan-states.json', function (result) {
                $.each(result,function (i,states) {
                    StateOp += "<option value='"+i+"'>"+states.name+"</option>";
                })
                $('#state1').html(StateOp);
            })
        }
    })
    $('#country').change(function () {
        if ($(this).val()=='NL'){
            $.getJSON('holland-states.json', function (result) {
                $.each(result,function (i,states) {
                    StateOp += "<option value='"+i+"'>"+states.name+"</option>";
                })
                $('#state1').html(StateOp);
            })
        }
    })
})