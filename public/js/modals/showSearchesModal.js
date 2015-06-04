/**
 * Created by Joaquim on 04/06/2015.
 */
function showSearchesModal(url) {
    $.get(url).done(function(response) {
        var searches = JSON.parse(response.searches);
        console.log(searches);
    }).fail(function(response) {
        if($('p', '.last-searches-modal').length == 0) {
            var p = $('<p>').text('Nenhuma pesquisa foi encontrada.').addClass('text-center');
            p.appendTo($('.modal-body', '.last-searches-modal'));
        }
    });

    $('.profile-modal').modal('hide');
    $('.last-searches-modal').modal('show');
}