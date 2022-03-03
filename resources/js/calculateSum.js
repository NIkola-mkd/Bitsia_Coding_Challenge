$(function () {
    $("#product_table tbody").on("keyup change", function () {
        sum();
    });

    $("#total").on("change", function () {
        net();
    });
});

function sum() {
    $("#product_table tbody tr").each(function (e) {
        var html = $(this).html();
        if (html != "") {
            var quantity = $(this).find(".quantity").val();
            var price = $(this).find(".price").val();
            $(this)
                .find(".sum")
                .val(parseFloat(quantity) * parseFloat(price).toFixed(2));
            net();
        }
    });
}

function net() {
    var net = 0;
    var at_st = 0;
    var tax = 19;
    $(".sum").each(function () {
        net += parseFloat($(this).val());
    });
    $("#net").html(net.toFixed(2));
    at_st = (net / 100) * tax;
    $("#at-st").html(at_st.toFixed(2));
    $("#gross").html((at_st + net).toFixed(2));
}
