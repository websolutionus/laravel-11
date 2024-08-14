const selectedContact = $('meta[name="selected_contact"]');
const baseUrl = $('meta[name="base_url"]').attr('content');

function fetchMessages() {
    let contactId = selectedContact.attr('content');
    $.ajax({
        method: 'GET',
        url: baseUrl + '/fetch-messages',
        data: {
            contact_id: contactId
        },
        beforeSend: function() {},
        success: function(data) {
            setContactInfo(data.contact);
        },
        error: function(xhr, status, error) {},
    })
}

function setContactInfo(contact) {
    $('.contact-name').text(contact.name);
}

$(document).ready(function () {
   // set contact id on meta
   $('.contact').on('click', function() {
    let contactId = $(this).data('id');
    selectedContact.attr('content', contactId);

    // fetch messages
    fetchMessages();

   })
});