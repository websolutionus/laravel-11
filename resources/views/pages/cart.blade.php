<x-app-layout>
       <!--============================
        CART START
    =============================-->
    <section class="wsus__cart mt_170 pb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 wow fadeInUp">
                    <div class="wsus__cart_list">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="pro_img">Item</th>

                                        <th class="pro_name">Name</th>

                                        <th class="pro_select">Quantity</th>

                                        <th class="pro_tk">Price</th>

                                        <th class="pro_icon">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="images/product_cart_1.jpg" alt="product" class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">Black Sneakers</a>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="1">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$120.00</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="fal fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="images/product_cart_2.jpg" alt="product" class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">Black Sneakers</a>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="2">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$99.000</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="fal fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="images/product_cart_3.jpg" alt="product" class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">Black Sneakers</a>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="3">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$120.00</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="fal fa-times"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="wsus__cart_list_bottom">
                        <div class="row justify-content-between">
                            <div class="col-md-6 col-xl-5 ms-auto">
                                <div class="wsus__cart_list_pricing">
                                    <h6>Total <span>$ 360.00</span></h6>
                                    <p>Tax<span>12%</span></p>
                                    <p>Discount<span>$ 60.00</span></p>
                                    <h5>Sub total<span>$ 300.00</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <ul class="wsus__cart_list_bottom_btn">
                        <li><a href="products.html" class="common_btn cont_shop">Continue To Shipping</a>
                        </li>
                        <li><a href="checkout.html" class="common_btn common_btn_2">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        CART END
    =============================--> 

    <x-slot name="scripts">
        <script>
            $(document).ready(function() {
                
            })
        </script>
    </x-slot>
</x-app-layout>


