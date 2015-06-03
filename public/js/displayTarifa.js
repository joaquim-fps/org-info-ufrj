/**
 * Created by Joaquim on 03/06/2015.
 */
var resultados = $("#resultados");
var erro = $(".erro");

resultados.hide();
erro.hide();

function displayTarifa(status) {
    if (status == google.maps.DirectionsStatus.OK) {
        erro.hide();
        resultados.slideDown();
    } else {
        resultados.hide();
        erro.slideDown();
    }
}