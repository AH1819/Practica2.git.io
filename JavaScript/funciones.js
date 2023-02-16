$(document).ready(function() {
    $('#mostrar').hide();
    $('#ocultar').click(function() {
        $('#formulario').hide();
    });
    $('#mostrar').click(function() {
        $('#formulario').show();
    });
    $('#ocultar').click(function() {
        $('#mostrar').show();
        $('#ocultar').hide();
    });
    $('#mostrar').click(function() {
        $('#ocultar').show();
        $('#mostrar').hide();
    });
    $('#mostra').hide();
    $('#oculta').click(function() {
        $('#formulari').hide();
    });
    $('#mostra').click(function() {
        $('#formulari').show();
    });
    $('#oculta').click(function() {
        $('#mostra').show();
        $('#oculta').hide();
    });
    $('#mostra').click(function() {
        $('#oculta').show();
        $('#mostra').hide();
    });
    var name, app, apm, dia, mes, año, result;
    $('#generar').click(function() {
        if ($('#name').val() != "") {
            if ($('#lastname1').val() != "") {
                if ($('#lastname2').val() != "") {
                    if ($('#fecha').val() != "") {
                        let result1 = '';
                        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                        const charactersLength = characters.length;
                        let counter = 0;
                        while (counter < 3) {
                            result1 += characters.charAt(Math.floor(Math.random() *
                                charactersLength));
                            counter += 1;
                        }
                        name = $('#name').val().substring(0, 2).toUpperCase();
                        app = $('#lastname1').val().substring(0, 2).toUpperCase();
                        apm = $('#lastname2').val().substring(0, 2).toUpperCase();
                        dia = $('#fecha').val().substring(8, 10);
                        mes = $('#fecha').val().substring(5, 7);
                        año = $('#fecha').val().substring(2, 4);
                        result = name + "-" + app + "-" + apm + "-" + año + "-" + mes + "-" + dia +
                            "-" + result1;
                        $('#resultado').val(result);
                    } else {
                        alert("Debe ingresar la fecha de nacimiento");
                    }
                } else {
                    alert("Debe ingresar el segundo apellido");
                }
            } else {
                alert("Debe ingresar el primer apellido");
            }
        } else {
            alert("Debe ingresar un nombre");
        }
    });
    $('#consulta').click(function() {
        if ($('#id').val() != "" && $('#id').val() > 0) {
            var iduser = $('#id').val();
            $.ajax({
                url: "https://jsonplaceholder.typicode.com/users/" + iduser,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#nombre').val(data.name);
                    $('#correo').val(data.email);
                    $('#telefono').val(data.phone);
                },
                error: function(err) {
                    alert("No se encontro registro");
                }
            });
        }else{
            alert("Debe ingresar un numero que sea mayor a 0");
        }
    });
});