<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
       @foreach($posts as $post) 
        <h4>{{ $post->name }}</h4>
        <p>Author: {{ $post->user->name }}</p>
        <hr>
       @endforeach
    </div>
    
</body>
</html>