const csrf_token = $('meta[name="csrf_token"]').attr('content');
const base_url = $('meta[name="base_url"]').attr('content');

function setAppearance(element) {

    let color = element.attr('data-color');
    let type = element.attr('data-type');
    let id = element.attr('data-id');
    $.ajax({
        method: 'POST',
        url: base_url + '/notes/appearance',
        data: {
            _token: csrf_token,
            color: color,
            type: type,
            id: id
        },
        success: function (data) {},
        error: function(xhr, status, error) {}
    });
}

$(document).ready(function() {
    $('.appearance').on('click', function() {
        $(this).closest('.single_note').css('background', $(this).attr('data-color'));
        setAppearance($(this));
    })
});