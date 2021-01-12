$("#qty_input").prop("disabled", true);
$("#plus-btn").click(function() {
    $("#qty_input").val(parseInt($("#qty_input").val()) + 10000);
});
$("#minus-btn").click(function() {
$("#qty_input").val(parseInt($("#qty_input").val()) - 10000);
if ($("#qty_input").val() == 0) {
    $("#qty_input").val(10000);
}
});
});