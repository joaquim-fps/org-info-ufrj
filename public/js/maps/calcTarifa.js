/**
 * Created by Joaquim on 03/06/2015.
 */
function calcTarifa(distance) {
    var bandeirada = 5.2,
        quilometroRodado = 2.05,
        horaParada = 25.83,
        quantHorasParadas = parseInt(document.getElementById('hora-parada').value) + parseFloat(document.getElementById('minuto-parado').value/60),
        distanciaPercorrida = parseFloat(distance.replace(".", "").replace(",",".")),
        horaParadaIsChecked = $("#check-hora-parada").is(':checked');

    document.getElementById('displayDistancia').innerHTML = distance;

    if (horaParadaIsChecked && !isNaN(quantHorasParadas)) {
        document.getElementById('displayTarifa').innerHTML = "R$ " + (bandeirada + distanciaPercorrida * quilometroRodado + horaParada * quantHorasParadas).toFixed(2).replace(".", ",");
    } else {
        document.getElementById('displayTarifa').innerHTML = "R$ " + (bandeirada + distanciaPercorrida * quilometroRodado).toFixed(2).replace(".", ",");
    }
}

$("#hora-parada, #minuto-parado").on('change', function() {
   if ($(this).val() < 0)
       $(this).val(0);
});

$("#check-hora-parada").on('click', function () {
    $("#hora-parada").toggleClass('hidden');
    $("#minuto-parado").toggleClass('hidden');
});

$("[for=hora-parada]").on('click', function () {
    $("#hora-parada").toggleClass('hidden');
    $("#minuto-parado").toggleClass('hidden');

    if($("#check-hora-parada")[0].checked == false)
        $("#check-hora-parada")[0].checked = true;
    else
        $("#check-hora-parada")[0].checked = false;
});


