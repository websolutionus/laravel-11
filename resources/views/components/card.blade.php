<div class="card" style="width: 18rem;">

    @isset($image)   
        {{ $image }}
    @endisset

    <div class="card-body">
        @isset($title)
           {{ $title }} 
        @endisset
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>