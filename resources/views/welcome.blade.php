@extends('app')

@section('contents')

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          @if (true)
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          @endif
        </p>
      </div>
    </div>
  </section>

  @include('gallery')
@endsection

{{-- @push('scripts')
    <script>
    $(document).ready(function() {
      alert("This script is for Home page!");
    })
  </script>
@endpush --}}


