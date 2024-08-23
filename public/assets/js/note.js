const csrf_token = $('meta[name="csrf_token"]').attr('content');
const base_url = $('meta[name="base_url"]').attr('content');

function setAppearance(element) {

    let color = element.attr('data-color');
    let image = element.attr('data-image');
    let type = element.attr('data-type');
    let id = element.attr('data-id');
    if (type == 'color') {
        element.closest('.single_note').css('background', color);
        $('.custom_modal_area[data-modal="modal_' + id + '"] .custom_modal_content').css('background', color);
    } else {
        $('.custom_modal_area[data-modal="modal_' + id + '"] .custom_modal_content').css('background-image', 'url(' + base_url + '/' + image + ')');

        element.closest('.single_note').css('background-image', 'url(' + base_url + '/' + image + ')');
    }



    $.ajax({
        method: 'POST',
        url: base_url + '/notes/appearance',
        data: {
            _token: csrf_token,
            color: color,
            type: type,
            image: image,
            id: id
        },
        success: function (data) { },
        error: function (xhr, status, error) { }
    });
}

$(document).ready(function () {
    $('.appearance').on('click', function () {
        setAppearance($(this));
    })
});