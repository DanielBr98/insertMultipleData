$(document).ready(function () {

    $("#btnAdd").click(function (event) {
        $.post('views/getForm.php', function (answer) {
            $("#append").append(answer);
        });
    });

    $("#append").on("click", "#btnDel", function (e) {
        e.preventDefault();
        $(this).closest('.remove').remove();
    });

});