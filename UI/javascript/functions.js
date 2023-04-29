var RateRent = {
    radius: 10,
    onLoad: function () {
        console.log('working');
    },

    collectData: function () {
        var ownerFirstName = $('#owner-first-name').val();
        var ownerLastName = $('#owner-last-name').val();
        var apartmentAddress = $('#apartment-adress').val();
        var rentingStart = $('#renting-start').val();
        var rentingEnd = $('#renting-end').val();
        var rentingRating = $('#renting-rating').val();


        var data = {
            'owner_first_name': ownerFirstName,
            'owner_last_name': ownerLastName,
            'apartment_address': apartmentAddress,
            'renting_start': rentingStart,
            'renting_end': rentingEnd,
            'renting_rating': rentingRating
        };


        $.ajax({
            type: 'POST',
            url: window.location.href + 'Backend/functions.php',
            data: data,
            success: function (response) {
                console.log('AJAX request was successful.');
                console.log('Server response:', response);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log('AJAX request failed.');
                console.log('Error:', errorThrown);
            }
        });
    }
};

$(document).ready(function () {
    RateRent.onLoad();


    $('form').submit(function (event) {
        event.preventDefault();
        RateRent.collectData();
    });
});