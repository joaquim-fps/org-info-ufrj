/**
 * Created by Joaquim on 04/06/2015.
 */
function showPasswordRecoveryModal() {
    $('.profile-modal').modal('hide');
    $('.password-recovery-modal').modal('show');
}

function showProfileModal() {
    $('.profile-modal').modal('show');
}

function showConfirmationModal() {
    $('.user-confirmation-modal').modal('show');
}

function showSignUpModal() {
    $('.sign-up-modal').modal('show');
}

function showSignInModal() {
    $('.sign-in-modal').modal('show');
}

function showSearchesModal(url) {
    var modal = $('.last-searches-modal'),
        corpoModal = $('.modal-body', modal);

    corpoModal.empty();

    $.get(url).done(function(response) {
        var searches = JSON.parse(response.searches);

        if (searches.length == 0) {
            RequestException();
        } else {
            searches.forEach(function(search) {
                //Criar essa estrutura para cada resultado de pesquisa:
                //
                //<div class="search-result col-xs-12">
                //   <a href = "#">
                //      <p class="route col-xs-12">
                //         <span class="origin col-xs-5">Origem</span>
                //         <span class="glyphicon glyphicon-arrow-right col-xs-1" aria-hidden="true"></span>
                //         <span class="destination col-xs-5">Destino</span>
                //      </p>
                //      <p class="time">
                //          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                //          <span class="timestamp">Horário</span>
                //      </p>
                //   </a>
                //</div>

                var div = $('<div>').addClass('search-result').addClass('col-xs-12'),
                    a = $('<a>').attr('href', '#'),
                    pRoute = $('<p>').addClass('route').addClass('col-xs-12'),
                    spanOrigin = $('<span>').addClass('origin').addClass('col-xs-5').text(search.origin),
                    spanArrow = $('<span>').addClass('glyphicon').addClass('glyphicon-arrow-right').addClass('col-xs-1').attr('aria-hidden', 'true'),
                    spanDestination = $('<span>').addClass('destination').addClass('col-xs-5').text(search.destination),
                    pTime = $('<p>').addClass('time'),
                    spanTime = $('<span>').addClass('glyphicon').addClass('glyphicon-time').attr('aria-hidden', 'true'),
                    spanTimeStamp = $('<span>').addClass('timestamp').text(search.created_at);

                pRoute.append(spanOrigin).append(spanArrow).append(spanDestination);
                pTime.append(spanTime).append(spanTimeStamp);
                a.append(pRoute).append(pTime);
                div.append(a);
                corpoModal.append(div);

                a.on('click', function(event) {
                    var modal = $('.last-searches-modal');

                    $('#origem').val($(this).find('.origin', modal).text());
                    $('#destino').val($(this).find('.destination', modal).text());
                    modal.modal('hide');
                    calcRouteWithoutSave();
                });
            });
        }
    }).fail(RequestException);

    $('.profile-modal').modal('hide');
    modal.modal('show');
}

function RequestException() {
    var corpoModal = $('.modal-body', '.last-searches-modal'),
        p = $('<p>').text('Nenhuma pesquisa foi encontrada.').addClass('text-center').addClass('fail-text');

    p.appendTo(corpoModal);
}