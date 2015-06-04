/**
 * Created by Joaquim on 03/06/2015.
 */
function reverseRoute() {
    var origem = $('#origem'),
        destino = $('#destino'),
        aux = origem.val();

    origem.val(destino.val());
    destino.val(aux);
}