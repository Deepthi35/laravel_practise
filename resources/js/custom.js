
$("form").parsley();

$(".select2").select2({
    allowClear: true,
});

var letters = /^[A-Za-z\s]+$/;
var digits = /^[0-9]+$/;
var numbers = /^[0-9.]+$/;
$(".letters-input").on("keypress", function (event) {
    var key = String.fromCharCode(event.which);
    if (!letters.test(key)) {
        event.preventDefault();
    }
});
$(".letters-input").on("input", function () {
    var value = $(this).val();
    if (!letters.test(value)) {
        $(this).val(value.replace(/[^A-Za-z\s]/g, ""));
    }
});

$(".digits-input").on("keypress", function (event) {
    var key = String.fromCharCode(event.which);
    if (!digits.test(key)) {
        event.preventDefault();
    }
});
$(".digits-input").on("input", function () {
    var value = $(this).val();
    if (!digits.test(value)) {
        $(this).val(value.replace(/[^0-9]/g, ""));
    }
});

$(".numbers-input").on("keypress", function (event) {
    var key = String.fromCharCode(event.which);
    if (!numbers.test(key)) {
        event.preventDefault();
    }
});
$(".numbers-input").on("input", function () {
    var value = $(this).val();
    if (!numbers.test(value)) {
        $(this).val(value.replace(/[^0-9.]/g, ""));
    }
});

$('input[type="file"]').on("change", function (e) {
    var fileName = e.target.files[0].name;
    $(this).next(".custom-file-label").html(fileName);
});
