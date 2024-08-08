<x-app-layout>
    <section class="wsus__product mt_145 pb_100">
        <div class="container">
            <h4 class="pt-3 pb-3 text-primary">Dashboard</h4>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>All Products</h5>
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Create New</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($products as $product)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><img style="width: 100px !important;" src="{{ asset($product->image) }}" alt=""></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->qty }}</td>
                            <td class="d-flex">
                              <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">edit</a>
                              <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger ms-2">delete</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                         
                        </tbody>
                      </table>
                      
                </div>
            </div>
            
        </div>
    </section>  


</x-app-layout>
