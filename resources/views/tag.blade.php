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
       @foreach($tags as $tag) 
        <h4>{{ $tag->name }}</h4>
        <p>Posts:</p>
        <ul>
            
            @foreach($tag->posts as $post)
            <li>{{ $post->name }}</li>
            @endforeach
        </ul>
        <hr>
       @endforeach
    </div>
    
</body>
</html>