<x-app-layout>
    <div class="search_area">
        <input type="text" placeholder="Search...">
        <i class="far fa-search"></i>
    </div>

    <div class="create_note">
        <i class="far fa-plus"></i>
    </div>

    <x-note.create-modal />

    <div class="row">
        <div class="col-xxl-3 col-md-6 col-xl-4">
            <div class="single_note active">
                <a class="single_note_check" href="#"><i class="far fa-check"></i></a>
                <div class="single_note_content">
                    <h2>This is heading</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Adipisci eos.</p>
                </div>

                <div class="ions_area">
                    <ul>
                        <li>
                            <a class="modal_drop_theme"><i class="far fa-palette"></i></a>
                            <div class="theme_area">
                                <ul class="theme_color">
                                    <li><a class="white active" href="#"><i class="far fa-tint-slash"></i></a>
                                    </li>
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
                    <!-- <a class="cancel_modal" href="#">cancel</a> -->
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-xl-4">
            <div class="single_note">
                <a class="single_note_check" href="#"><i class="far fa-check"></i></a>
                <div class="single_note_content">
                    <h2>This is heading</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Adipisci eos.</p>
                </div>

                <div class="ions_area">
                    <ul>
                        <li>
                            <a class="modal_drop_theme"><i class="far fa-palette"></i></a>
                            <div class="theme_area">
                                <ul class="theme_color">
                                    <li><a class="white active" href="#"><i class="far fa-tint-slash"></i></a>
                                    </li>
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
                    <!-- <a class="cancel_modal" href="#">cancel</a> -->
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-xl-4">
            <div class="single_note">
                <a class="single_note_check" href="#"><i class="far fa-check"></i></a>
                <div class="single_note_content">
                    <h2>This is heading</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Adipisci eos.</p>
                </div>

                <div class="ions_area">
                    <ul>
                        <li>
                            <a class="modal_drop_theme"><i class="far fa-palette"></i></a>
                            <div class="theme_area">
                                <ul class="theme_color">
                                    <li><a class="white active" href="#"><i class="far fa-tint-slash"></i></a>
                                    </li>
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
                    <!-- <a class="cancel_modal" href="#">cancel</a> -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
