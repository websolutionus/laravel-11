const selectedContact = $('meta[name="selected_contact"]');
const baseUrl = $('meta[name="base_url"]').attr('content');

function toggleLoader() {
    $('.loader').toggleClass('d-none');
}

function fetchMessages() {
    let contactId = selectedContact.attr('content');
    $.ajax({
        method: 'GET',
        url: baseUrl + '/fetch-messages',
        data: {
            contact_id: contactId
        },
        beforeSend: function() {
            toggleLoader();
        },
        success: function(data) {
            setContactInfo(data.contact);
        },
        error: function(xhr, status, error) {},
        complete: function() {
            toggleLoader();
        }
    })
}

function sendMessage() {
    let contactId = selectedContact.attr('content');
    let formData = $('.message-form').serialize();
    $.ajax({
        method: 'POST',
        url: baseUrl + '/send-message',
        data: formData + '&contact_id=' + contactId,
        success: function() {},
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

   });

   $('.message-form').on('submit', function(e){
    e.preventDefault();
    sendMessage();
   })
});