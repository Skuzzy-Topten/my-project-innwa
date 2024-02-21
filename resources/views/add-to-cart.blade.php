@extends('layouts.add-to-cart')

@section('site title', 'Cart')

@section('content')
    <div class="container">
        <div class="row pt-3 pb-3">
            <div class="col-xl-8 col-lg-8 col-md-12 p-2">
                <form id="">
                    <div class="card">
                        <div class="card-body">
                            <div class="col p-2">
                                <h5 class="p-2 m-0">
                                    <i class="fa-solid fa-basket-shopping text-primary"></i> CART DETAIL
                                </h5>
                            </div>
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table table-borderless align-middle order-table m-0">
                                        <thead class="text-center">
                                        <tr class="bg-light border rounded">
                                            <th>
                                                <p class="p-2 m-0">
                                                    No
                                                </p>
                                            </th>
                                            <th>
                                                <p class="p-2 m-0">
                                                    Image
                                                </p>
                                            </th>
                                            <th>
                                                <p class="p-2 m-0">
                                                    Name
                                                </p>
                                            </th>
                                            <th>
                                                <p class="p-2 m-0">
                                                    Quantity
                                                </p>
                                            </th>
                                            <th>
                                                <p class="p-2 m-0">
                                                    Price
                                                </p>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center border rounded">
                                            <td data-label="No">
                                                <p class="p-2 m-0">
                                                    1
                                                </p>
                                            </td>
                                            <td data-label="Image">
                                                <img src="{!! asset('public/img-src/products/iphone 14 pro.jpeg') !!}" class="cart-product-image" alt="product image">
                                            </td>
                                            <td data-label="Name">
                                                <p class="p-2 m-0">
                                                    iPhone 14 Pro
                                                </p>
                                                <div class="col p-2">
                                                    <a href="#" class="btn btn-sm border">
                                                        Details
                                                    </a>
                                                </div>
                                            </td>
                                            <td data-label="Quantity">
                                                <div class="sp-quantity">
                                                    <div class="sp-minus fff"><a class="product-01 btn btn-sm btn-primary rounded-pill" data-multi="-1">-</a></div>
                                                    <div class="sp-input m-auto">
                                                        <input type="text" class="quntity-input" value="1" />
                                                    </div>
                                                    <div class="sp-plus fff"><a class="product-01 btn btn-sm btn-primary rounded-pill" data-multi="1">+</a></div>
                                                </div>
                                                <script>
                                                    $(".product-01").on("click", function() {
                                                        var $button = $(this);
                                                        var $input = $button.closest('.sp-quantity').find("input.quntity-input");
                                                        $input.val((i, v) => Math.max(0, +v + 1 * $button.data('multi')));
                                                    });
                                                </script>
                                            </td>
                                            <td data-label="Price">
                                                <p class="p-2 m-0">
                                                    100,000
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="text-center border rounded">
                                            <td data-label="No">
                                                <p class="p-2 m-0">
                                                    2
                                                </p>
                                            </td>
                                            <td data-label="Image">
                                                <img src="{!! asset('public/img-src/products/iphone 14.jpeg') !!}" class="cart-product-image" alt="product image">
                                            </td>
                                            <td data-label="Name">
                                                <p class="p-2 m-0">
                                                    iPhone 14
                                                </p>
                                                <div class="col p-2">
                                                    <a href="#" class="btn btn-sm border">
                                                        Details
                                                    </a>
                                                </div>
                                            </td>
                                            <td data-label="Quantity">
                                                <div class="sp-quantity">
                                                    <div class="sp-minus fff"><a class="product-02 btn btn-sm btn-primary rounded-pill" data-multi="-1">-</a></div>
                                                    <div class="sp-input m-auto">
                                                        <input type="text" class="quntity-input" value="1" />
                                                    </div>
                                                    <div class="sp-plus fff"><a class="product-02 btn btn-sm btn-primary rounded-pill" data-multi="1">+</a></div>
                                                </div>
                                                <script>
                                                    $(".product-02").on("click", function() {
                                                        var $button = $(this);
                                                        var $input = $button.closest('.sp-quantity').find("input.quntity-input");
                                                        $input.val((i, v) => Math.max(0, +v + 1 * $button.data('multi')));
                                                    });
                                                </script>
                                            </td>
                                            <td data-label="Price">
                                                <p class="p-2 m-0">
                                                    100,000
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="text-center border rounded">
                                            <td data-label="No">
                                                <p class="p-2 m-0">
                                                    3
                                                </p>
                                            </td>
                                            <td data-label="Image">
                                                <img src="{!! asset('public/img-src/products/iphone 13 mini.jpeg') !!}" class="cart-product-image" alt="product image">
                                            </td>
                                            <td data-label="Name">
                                                <p class="p-2 m-0">
                                                    iPhone 13 Mini
                                                </p>
                                                <div class="col p-2">
                                                    <a href="#" class="btn btn-sm border">
                                                        Details
                                                    </a>
                                                </div>
                                            </td>
                                            <td data-label="Quantity">
                                                <div class="sp-quantity">
                                                    <div class="sp-minus fff"><a class="product-03 btn btn-sm btn-primary rounded-pill" data-multi="-1">-</a></div>
                                                    <div class="sp-input m-auto">
                                                        <input type="text" class="quntity-input" value="1" />
                                                    </div>
                                                    <div class="sp-plus fff"><a class="product-03 btn btn-sm btn-primary rounded-pill" data-multi="1">+</a></div>
                                                </div>
                                                <script>
                                                    $(".product-03").on("click", function() {
                                                        var $button = $(this);
                                                        var $input = $button.closest('.sp-quantity').find("input.quntity-input");
                                                        $input.val((i, v) => Math.max(0, +v + 1 * $button.data('multi')));
                                                    });
                                                </script>
                                            </td>
                                            <td data-label="Price">
                                                <p class="p-2 m-0">
                                                    100,000
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col text-center p-2">
                                    <button type="submit" class="btn btn-outline-danger rounded-pill">
                                        <i class="fa-solid fa-pen"></i> UPDATE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 p-2">
                <div class="card">
                    <div class="card-body">
                        <div class="col border-bottom p-2">
                            <h5 class="p-2 m-0">
                                <i class="fa-solid fa-dollar-sign text-primary"></i> CART TOTAL
                            </h5>
                        </div>
                        <div class="col p-2">
                            <div class="table-responsive">
                                <table class="table table-borderless m-0">
                                    <tr class="text-center">
                                        <td>
                                            SUBTOTAL
                                        </td>
                                        <td>
                                            400,000 Ks
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col p-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Coupon Code">
                                <button type="submit" class="btn btn-outline-danger">
                                    UPDATE
                                </button>
                            </div>
                        </div>
                        <div class="col p-2">
                            <div class="table-responsive border rounded shadow-lg">
                                <table class="table table-borderless m-0">
                                    <tr class="text-center">
                                        <td>
                                            <h4 class="p-2 m-0">
                                                TOTAL
                                            </h4>
                                        </td>
                                        <td>
                                            <h4 class="text-danger p-2 m-0">
                                                400,000 Ks
                                            </h4>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col text-center p-2">
                            <a href="./checkout" class="btn btn-outline-primary">
                                <i class="fa-solid fa-circle-right"></i> PROCEED TO CHECKOUT
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
