<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Hello</h3> 

    {{-- <x-alert style="color:red; border: 1px solid green;" text="This is a message" /> --}}

    @php
        $languages = ['Php', 'Javascript', 'Java', 'Dart', 'C', 'C++'];   
    @endphp

    @foreach($languages as $language)
        <x-alert :text="$language" />
    @endforeach
    


</body>
</html>