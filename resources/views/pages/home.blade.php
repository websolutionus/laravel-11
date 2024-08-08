<x-app-layout>
        <!--============================
        PRODUCT START
    =============================-->
    <section class="wsus__product mt_145 pb_100">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-xxl-3 col-md-6 col-lg-4">
                    <div class="wsus__product_item">
                        <div class="img">
                            <img src="{{ asset($product->image) }}" alt="equipment" class="img-fluid w-100">
                            <a href="#" class="add_cart">
                                <span><img src="images/cart_icon_black.svg" alt="cart" class="img-fluid w-100"></span>
                                Add To Cart
                            </a>
                            
                        </div>
                        <span class="new">new</span>
                        <div class="text">
                            <a href="{{ route('product-details', $product->id) }}" class="title">{{ $product->name }}</a>
                            <p>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <h4>${{ $product->price }}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="wsus__pagination mt_60">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <i class="far fa-arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!--============================
        PRODUCT END
    =============================-->
    </x-app-layout>