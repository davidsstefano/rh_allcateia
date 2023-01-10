$(document).ready(function() {


    $('#formlogin').submit(function(e) {
        e.preventDefault();
        fnclogin();

        return (false);
    });


});

function fnclogin() {



    $.post("../api/api_login.php", $('#formlogin').serialize(),
        function(data, textStatus, jqXHR) {
            console.log(data.controle);
            if (data.controle == 1) {
                window.location.href = 'pag_adm.php';
            } else if (data.controle == 2) {
                window.location.href = 'pag_funcionario.php';

            } else {
                alert("Email ou senha incorreta!");

            }
        }, "json"
    );
}