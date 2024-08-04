<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h3>Hello</h3> 

    {{-- <x-alert style="color:red; border: 1px solid green;" text="This is a message" /> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <x-card>
                    <x-slot name="image">
                        <img src="https://images.unsplash.com/photo-1719937050679-c3a2c9c67b0f?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                    </x-slot>
                    <x-slot name="title">

                        <h5 class="card-title">Card title</h5>
                    </x-slot>
                </x-card>

            </div>
            <div class="col-md-4">
                <x-card>
                    <x-slot name="image">
                        <img src="https://images.unsplash.com/photo-1610415304248-5fd40f3e2263?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDZ8fHxlbnwwfHx8fHw%3D" class="card-img-top" alt="...">
                    </x-slot>
                    <x-slot name="title">

                        <h5 class="card-title">Card title</h5>
                    </x-slot>
                </x-card>

            </div>
            <div class="col-md-4">
                <x-card>
                    <x-slot name="image">
                        <img src="https://images.unsplash.com/photo-1602524821041-4ca34980d066?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                    </x-slot>
                    <x-slot name="title">

                        <h5 class="card-title">Card title</h5>
                    </x-slot>
                </x-card>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>