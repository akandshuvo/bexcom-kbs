/*
 :::::::::::::::::AFTER SALE SERVICE LOCATION::::::::::::::::::::::::::::
 */
$("#after_sale_submit").click( function() {
    $.post( $("#after_sale_insert").attr("action"),
        $("#after_sale_insert :input").serializeArray(),
        function(info){ $("#after_sale_result").html(info);
        });
    clearInput();
});

$("#after_sale_insert").submit( function() {
    return false;
});

function clearInput() {
    $("#after_sale_insert :input").each( function() {
        $(this).val('');
    });
}
/*
 :::::::::::::::::RETAILER LOCATION::::::::::::::::::::::::::::
 */
$("#airtel_submit").click( function() {
    $.post( $("#airtel_form").attr("action"),
        $("#airtel_form :input").serializeArray(),
        function(info){ $("#airtel_form_result").html(info);
        });
    clearInput();
});

$("#airtel_form").submit( function() {
    return false;
});

function clearInput() {
    $("#airtel_form :input").each( function() {
        $(this).val('');
    });
}
/*
 :::::::::::::::::INSTALLER ADDRESS::::::::::::::::::::::::::::
 */
$("#installer_submit").click( function() {
    $.post( $("#installer_address").attr("action"),
        $("#installer_address:input").serializeArray(),
        function(info){ $("#installer_address_result").html(info);
        });
    clearInput();
});

$("#installer_address").submit( function() {
    return false;
});

function clearInput() {
    $("#installer_address :input").each( function() {
        $(this).val('');
    });
}