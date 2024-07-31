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
        <form action="{{ route('send.mail') }}" method="POST">
            @csrf
            <label for="">Email</label>
            <input type="email" name="email">
            <br>
            <label for="">Message</label>
            <input type="text" name="message">
            <br>
            <button type="submit">Send</button>
        </form>
    </div> 
</body>
</html>