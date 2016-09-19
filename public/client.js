$('#press').on('click', function () {
    $.ajax({
        'url': $('input[name=address]').val() + '?token=' + $('input[name=token]').val(),
        'type': 'get',
        success: function (data) {
            $('#dump').html(JSON.stringify(data))
        }

    })
});