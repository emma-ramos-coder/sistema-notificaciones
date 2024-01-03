$(document).ready(function(){
    $("#agregar").click(function(){
        agregar();
    });
    $("#receiver_id").change(function(){
    var datosDestinatario = document.getElementById('receiver_id').value.split('_');
    $("#email").val(datosDestinatario[1]);
    $("#phone").val(datosDestinatario[2]);
    });

});

var cont=1;
var emails=[];

//var total = 0;
//var subtotal = [];
$("#guardar").hide();

function agregar(){
    var datosDestinatario = document.getElementById('receiver_id').value.split('_');
    var receiver_id = datosDestinatario[0];
    var receiver = $("#receiver_id option:selected").text();
    var email = $("#email").val();
    var phone = $("#phone").val();

    if(receiver_id!="" && email!="" && phone!=""){
        var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+'); "><i class="fa fa-times"></i>  Eliminar</button></td> <td><input type="hidden" name="receiver_id[]" value="'+receiver_id+'">'+receiver+'</td> <td><input type="hidden" name="email[]" value="'+email+'"><input class="form-control" type="text" value="'+email+'" disabled></td><td><input type="hidden" name="phone[]" value="'+phone+'"><input type="text" value="'+phone+'" class="form-control" disabled></td></tr>';
        cont++
        limpiar();
        evaluar();
        $("#destinatarios").append(fila);

        // Crear un elemento temporal para contener la HTML de la fila
        var temp = document.createElement('div');
        temp.innerHTML = fila;

        // Obtener el valor del campo de email oculto y agregarlo al array de emails
        var emailValue = temp.querySelector('input[name="email[]"]').value;
        emails.push(emailValue);

        // Concatenar los emails separados por comas en una variable string
        var emailsConcatenados = emails.join(', ');
        $("#destinatario").val(emailsConcatenados);
    } else {
        Swal.fire({type: 'error', text: 'Rellene todos los campos del detalle de la venta.',})
    }
}

function limpiar(){
    $("#email").val("");
    $("#phone").val("");
}

function evaluar(){
    if (cont>0){
        $("#guardar").prop("disabled", false);
    }   else {
        $("#guardar").prop("disabled", true);
    }
}

function eliminar(index){
    cont--;
    $("#fila"+index).remove();
    evaluar();
}

