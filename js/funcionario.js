$(document).ready(function() {

    fncCarregahorario();


});

function fncCarregahorario() {
    var usuario = $('#id_usuario').val();



    //     console.log(usuario);

    //     $('#divhorario').html('<div class="spinner-border text-primary" role="status">\
    //         <span class="sr-only">Loading...</span>\
    //     </div>');

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
                    lista = lista + '<table "><tr><td class="col-2" >' + element.horario + '</td></tr></table>';
                });
                console.log(lista);
                tabela.append(cabecalho);
                tabela.append(corpo);


                $('#divhorario').append(tabela).html(lista);
                $('#divhorario');
                $('#divhorario').html(lista);
            } else {
                $('#cadastro');
            }
            // console.log(tabela);
            // console.log(botao);

        })
};