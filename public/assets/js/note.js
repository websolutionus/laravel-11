
const csrf_token = $('meta[name="csrf_token"]').attr('content');
const base_url = $('meta[name="base_url"]').attr('content');
const noteTitle = $('.note_title');

/** Reusable functions */
function handleNoteTitle() {
    let noteTitleVal = noteTitle.val();
    console.log(noteTitleVal);
    $.ajax({
        method: 'POST',
        url: `${base_url}/notes`,
        data: {
            _token: csrf_token,
            note_title: noteTitleVal
        },
        success: function() {},
        error: function(xhr, status, error) {},
    });
}


$(document).ready(function() {
    noteTitle.on('input', handleNoteTitle);
});