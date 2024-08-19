<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Localization</title>

  </head>

  <body>
    <div class="container">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">Navbar</a>
          <form class="d-flex" action="{{ route('home') }}" method="get" onchange="this.submit()">
            <select class="form-select" aria-label="Default select example" name="locale">
              <option @selected(request()->locale == 'en') value="en">English</option>
              <option @selected(request()->locale == 'hi') value="hi">Hindi</option>
            </select>
          </form>
        </div>
      </nav>


      <div class="row">
        <div class="col-md-6">
          <div class="card mt-3">
            <div class="card-header">
              {{ __('frontend.Featured') }}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ __('frontend.Unlocking the Power of Artisan: Real-Time Command') }}</h5>
              <p class="card-text">{{ __('frontend.Explore how to enhance your Laravel applications by integrating real-time Artisan command outputs directly into your DOM. This guide walks you through the steps to create dynamic') }}</p>
              <a href="#" class="btn btn-primary">{{ __('frontend.Go somewhere') }}</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mt-3">
            <div class="card-header">
              {{ __('frontend.Featured') }}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ __('frontend.Building Your Own Voice Assistant with JavaScript and ChatGPT') }}</h5>
              <p class="card-text">{{ __('frontend.Dive into the world of AI-powered applications with this tutorial on creating a custom voice assistant using JavaScript and ChatGPT. Learn how to bring interactive voice features to your web projects, making them more engaging and user-friendly.') }}</p>
              <a href="#" class="btn btn-primary">{{ __('frontend.Go somewhere') }}</a>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>