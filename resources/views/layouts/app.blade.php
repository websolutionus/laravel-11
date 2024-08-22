<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('/') }}">
    <title>Google Keep</title>
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>


    @include('layouts.header')

    
    <div class="content_area d-flex flex-wrap">
        @include('layouts.sidebar')
        
        <div class="main_content">
           {{ $slot }}
        </div>
    </div>

    <!--jquery library js-->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('assets/js/Font-Awesome.js') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/note.js') }}"></script>

</body>

</html>