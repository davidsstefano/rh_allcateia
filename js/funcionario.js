$(document).ready(function() {

    fncCarregahorario();
    fncCarregaintervalo();


    $('#enviar_ponto').submit(function(e) {
        e.preventDefault();
        fncenviar_ponto();

        return (false);
    });




});

function fncenviar_ponto() {

    $.post("../api/api_registrarponto.php", $('#enviar_ponto').serialize(),
        function(data, textStatus, jqXHR) {
            // console.log(data.controle);
            if (data.controle == 1) {

                alert("Ponto cadastrado com sucesso!!!");
                document.location.reload(true);


            } else {
                alert("Limite 4 restros por dia!!!");

            }
        }, "json"
    );
}

function fncCarregahorario() {
    var usuario = $('#id_usuario').val();


    $.getJSON("../api/api_retornahorario.php", {

            'id_usuario': usuario,


        },
        function(data, textStatus, jqXHR) {
            if (data.horario && data.horario.length > 0 && textStatus != "error") {

                var tabela = document.createElement("table");
                var cabecalho = document.createElement("thead");
                var corpo = document.createElement("th");

                var lista = "";
                $('#divhorario').text('carreguei legal');
                data.horario.forEach(element => {
                    lista = lista + '<td class="col-2" >' + element.horario + '</td><td class="col-2" ></td>';
                });
                // console.log(lista);
                tabela.append(cabecalho);
                tabela.append(corpo);


                $('#divhorario').append(tabela).html(lista);
                $('#divhorario');
                $('#divhorario').html(lista);
            } else {
                $('#divhorario');
            }
            // console.log(tabela);
            // console.log(botao);

        })
};