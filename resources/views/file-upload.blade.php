@extends('app')

@section('contents')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                 <div class="card-body mt-5 mb-5">
                     <form action=""  method="POST">
                        @csrf
                         <div class="mb-3">
                             <label for="" class="form-label">File</label>
                             <input type="file" class="form-control" id="" name="file">
                         </div>
                        
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                 </div>
                </div>
             </div>
        </div>

    </section>
@endsection
