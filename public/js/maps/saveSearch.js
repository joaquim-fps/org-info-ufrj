/**
 * Created by Joaquim on 07/06/2015.
 */
function saveSearch(url, origin, destination) {
    var data = {
            'origin': origin,
            'destination': destination
        };

    $.post(url, data, function() {
        console.log('Search saved.');
    }).fail(function() {
        console.log('Search not saved.');
    });
}