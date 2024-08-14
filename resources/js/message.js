const selectedContact = $('meta[name="selected_contact"]');

function fetchMessages() {
    let contactId = selectedContact.attr('content');
    $.ajax({
        method: 'GET',
        url: '',
        data: {},
        beforeSend: function() {},
        success: function(data) {},
        error: function(xhr, status, error) {},
    })
}

$(document).ready(function () {
   // set contact id on meta
   $('.contact').on('click', function() {
    let contactId = $(this).data('id');
    selectedContact.attr('content', contactId);
   })
});