<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h3>User Dashboard</h3> 
    @if(Auth::check())
   <p>Name: {{ Auth::user()->name }}</p>
   <p>Email: {{ auth()->user()->email }}</p>
   @endif
</body>
</html>