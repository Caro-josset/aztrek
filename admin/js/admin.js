$(document).ready(function () {

    $('.table').DataTable();
    $('select').select2();
    $('textarea').summernote();

    $('table a.btn-danger').click(function (event) {
        event.preventDefault();

        var url = $(this).attr("href");
        var row = $(this).closest("tr");
        var response = confirm("Êtes-vous certain ?");

        if (response) {
            fetch(url)
                .then(function (res) {
                    if (res.status === 200) {
                        row.fadeOut();
                    } else {
                        alert("Erreur lors de la suppression");
                    }
                });
        }
    });
});