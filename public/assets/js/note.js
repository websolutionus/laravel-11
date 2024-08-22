
const csrf_token = $('meta[name="csrf_token"]').attr('content');
const base_url = $('meta[name="base_url"]').attr('content');
const noteTitle = $('.note_title');
const noteContent = $('.note_content');


/** Reusable functions */

function debounce(func, delay) { // 300ms
    let timeout;
    return (...args) => {
        clearTimeout(timeout);
        timeout = setTimeout(() => func(...args), delay);
    }
}


function handleNote() {
    let noteTitleVal = noteTitle.val();
    let noteContentVal = noteContent.val();
    console.log(noteTitleVal);
    $.ajax({
        method: 'POST',
        url: `${base_url}/notes`,
        data: {
            _token: csrf_token,
            note_title: noteTitleVal,
            note_content: noteContentVal
        },
        success: function() {},
        error: function(xhr, status, error) {},
    });
}


$(document).ready(function() {
    noteTitle.on('input', debounce(handleNote, 400));
    noteContent.on('input', debounce(handleNote, 400));
});