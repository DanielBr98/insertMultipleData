$(document).ready(function () {

    $("#btnAdd").click(function (event) {
        $.post('getForm.php', function (resposta) {
            $("#append").append(resposta);
        });
    });

    $("#append").on("click", "#btnDel", function (e) {
        e.preventDefault();
        $(this).closest('.remove').remove();
    });

});