<div class="custom_modal_area  create_note_modal">
    <div class="custom_modal_content note_create_inner">
        <div class="pin_icon">
            <img src="images/pin_icons.png" alt="pin" class="img-fluid">
        </div>
        <form action="{{ route('notes.store') }}" method="POST" class="create-note">
        @csrf
        <input type="text" placeholder="Title" name="title">
        <textarea rows="4" placeholder="Note" id="editorjs" name="content"></textarea>
        </form>
        <div class="ions_area">
            <ul>
            </ul>
            <a class="btn btn-sm btn-dark" href="javascript:;" onclick="$('.create-note').submit()">Save</a>
        </div>
    </div>
</div>