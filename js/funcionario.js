$(document).ready(function() {

    fncCarregahorario();


});

function fncCarregahorario() {
    var usuario = $('#id_usuario').val();
    var data_atual = $('data_atual').val();


    console.log(usuario);
    console.log(data_atual);
    // $('#divPartida').html('<div class="spinner-border text-primary" role="status">\
    //     <span class="sr-only">Loading...</span>\
    // </div>');

    $.getJSON("../api/api_retornahorario.php", {




            'id_usuario': usuario,
            'data_atual': data_atual

        },
        function(data, textStatus, jqXHR) {
            if (data.partida && data.partida.length > 0 && textStatus != "error") {

                var tabela = document.createElement("table");
                var cabecalho = document.createElement("thead");
                var corpo = document.createElement("th");

                var lista = "";
                $('#divdivhorario').text('carreguei legal');
                data.horario(element => {

                    lista = lista + '<table class="table table-striped"><tr><td class="col-2" >' + element.rodada + 'ª</td><td><img class="img_escudo" src="../img/escudos/' + element.img_selecao + '"/></td><td class=" col-2"><b>' + element.nome_selecao + '</td><td class="col-2"><h3>X</h3></td><td class=" col-2"><b>' + element.selecao + '</td><td><img class="img_escudo" src="../img/escudos/' + element.img + '"/></td><td class=" col-2">' + element.data + '</td><td class=" col-2">' + element.horario + '</td></tr></table>';
                });
                // console.log(data.Partida);
                tabela.append(cabecalho);
                tabela.append(corpo);


                $('#divdivhorario').append(tabela).html(lista);
                $('#divdivhorario');
                $('#divdivhorario').html(lista);
            } else {
                $('#cadastro');
            }
            // console.log(tabela);
            // console.log(botao);

        })
};