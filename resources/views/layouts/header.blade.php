<header>
    <div class="header_left d-flex flex-wrap align-items-center">
        <div class="header_icon"><i class="fal fa-bars"></i></div>
        <a href="#"><img src="{{ asset('assets/images/logo.jpg') }}" alt="logo" class="img-fluid"></a>
    </div>
    <ul class="header_right d-flex flex-wrap align-items-center">
        <li class="setting_area">
            <a class="setting"><i class="fal fa-cog"></i></a>
            <ul class="drop_menu drop_menu_setting">
                <li><a href="{{ route('profile.edit') }}">settings</a></li>
                <li><a href="javascript:;" onclick="$('.logout').submit()">Logout</a></li>
            </ul>
        </li>
        <li class="user_area">
            <div class="user">
                <img src="{{ asset('images/bg_1.jpg') }}" alt="user" class="img-fluid">
            </div>
            <ul class="drop_menu drop_menu_user">
                <li><a href="{{ route('profile.edit') }}">Settings</a></li>
                <li><a href="javascript:;" onclick="$('.logout').submit()" class="text-danger">Logout</a></li>
            </ul>
        </li>

    <form action="{{ route('logout') }}" class="logout" method="POST">
        @csrf
    </form>
    </ul>

</header>