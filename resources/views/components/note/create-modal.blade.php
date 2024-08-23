<div class="custom_modal_area note_create_modal note_create_id">
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
                <li>
                    <a class="modal_drop_theme"><i class="far fa-palette"></i></a>
                    <div class="theme_area">
                        <ul class="theme_color">
                            <li><a class="white active" href="#"><i class="far fa-tint-slash"></i></a></li>
                            <li><a class="red" href="#"></a></li>
                            <li><a class="blue" href="#"></a></li>
                            <li><a class="yellow" href="#"></a></li>
                            <li><a class="green" href="#"></a></li>
                            <li><a class="purple" href="#"></a></li>
                            <li><a class="orange" href="#"></a></li>
                            <li><a class="red" href="#"></a></li>
                            <li><a class="blue" href="#"></a></li>
                            <li><a class="yellow" href="#"></a></li>
                            <li><a class="green" href="#"></a></li>
                            <li><a class="purple" href="#"></a></li>
                        </ul>
                        <ul class="theme_img">
                            <li><a class="img_1 close active" href="#"></a></li>
                            <li><a class="img_2" href="#"></a></li>
                            <li><a class="img_3" href="#"></a></li>
                            <li><a class="img_4" href="#"></a></li>
                            <li><a class="img_5" href="#"></a></li>
                            <li><a class="img_6" href="#"></a></li>
                            <li><a class="img_4" href="#"></a></li>
                            <li><a class="img_5" href="#"></a></li>
                            <li><a class="img_6" href="#"></a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#"><i class="far fa-box-alt"></i></a>
                </li>
                <li>
                    <a class="modal_drop_list"><i class="far fa-ellipsis-v"></i></a>
                    <ul class="drop_list">
                        <li><a href="#">delete note</a></li>
                        <li><a href="#">add label</a></li>
                        <li><a href="#">add drawing</a></li>
                        <li><a href="#">make a copy</a></li>
                        <li><a href="#">vision history</a></li>
                    </ul>
                </li>
            </ul>
            <a class="" href="javascript:;" onclick="$('.create-note').submit()">Save</a>
        </div>
    </div>
</div>