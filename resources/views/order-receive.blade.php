@extends('layouts.order-receive')

@section('site title', 'Order Receive')

@section('content')
    <div class="container">
        <div class="row pt-3">
            <div class="col p-2">
                <h5 class="text-center p-2 m-0">
                    Thank you. Your order has been received.
                </h5>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-lg-4 col-md-6 p-2">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="col p-2">
                            <h6 class="p-2 m-0">
                                <i class="fa-solid fa-circle-info text-primary"></i> ORDER NUMBER
                            </h6>
                            <p class="text-secondary p-2 m-0">
                                1105
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="col p-2">
                            <h6 class="p-2 m-0">
                                <i class="fa-solid fa-calendar-days text-primary"></i> ORDER DATE
                            </h6>
                            <p class="text-secondary p-2 m-0">
                                16.02.2023
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="col p-2">
                            <h6 class="p-2 m-0">
                                <i class="fa-solid fa-cart-plus text-primary"></i> TOTAL
                            </h6>
                            <p class="text-secondary p-2 m-0">
                                300,000 Ks
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="col p-2">
                            <h6 class="p-2 m-0">
                                <i class="fa-solid fa-credit-card text-primary"></i> PAYMENT
                            </h6>
                            <p class="text-secondary p-2 m-0">
                                AYA PAY
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="col p-2">
                            <h6 class="p-2 m-0">
                                <i class="fa-solid fa-truck text-primary"></i> DELIVERY
                            </h6>
                        </div>
                        <div class="col p-2">
                            <div class="table-responsive">
                                <table class="table table-borderless m-0">
                                    <tr>
                                        <td>
                                            <p class="p-2 m-0">
                                                State/Division
                                            </p>
                                        </td>
                                        <td>
                                            <p class="p-2 m-0">
                                                Yangon
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="p-2 m-0">
                                                Township
                                            </p>
                                        </td>
                                        <td>
                                            <p class="p-2 m-0">
                                                Kyimyindaing
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="p-2 m-0">
                                                Address
                                            </p>
                                        </td>
                                        <td>
                                            <p class="p-2 m-0">
                                                Street Address
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="col p-2">
                            <h6 class="p-2 m-0">
                                <i class="fa-solid fa-tag text-primary"></i> COUPON
                            </h6>
                        </div>
                        <div class="col p-2">
                            <div class="table-responsive">
                                <table class="table table-borderless m-0">
                                    <tr>
                                        <td>
                                            <p class="p-2 m-0">
                                                Code
                                            </p>
                                        </td>
                                        <td>
                                            <p class="p-2 m-0">
                                                IWCOUP1135
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="p-2 m-0">
                                                End Date
                                            </p>
                                        </td>
                                        <td>
                                            <p class="p-2 m-0">
                                                28.02.2023
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="p-2 m-0">
                                                Discount
                                            </p>
                                        </td>
                                        <td>
                                            <p class="p-2 m-0">
                                                5,000 Ks
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col p-2">
                <h5 class="p-2 m-0">
                    <i class="fa-solid fa-basket-shopping text-primary"></i> ORDER DETAIL
                </h5>
            </div>
        </div>
        <div class="row pt-3 pb-3">
            <div class="table-responsive">
                <table class="table table-borderless align-middle order-table">
                    <thead class="bg-light border rounded">
                        <tr class="text-center">
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
                                <img src="{!! asset('public/img-src/products/iphone 14.jpeg') !!}" class="order-receive-product-image" alt="Product Image">
                            </td>
                            <td data-label="Name">
                                <p class="p-2 m-0">
                                    iPhone 14
                                </p>
                            </td>
                            <td data-label="Quantity">
                                <p class="p-2 m-0">
                                    1
                                </p>
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
                                <img src="{!! asset('public/img-src/products/iphone 14 pro.jpeg') !!}" class="order-receive-product-image" alt="Product Image">
                            </td>
                            <td data-label="Name">
                                <p class="p-2 m-0">
                                    iPhone 14 Pro
                                </p>
                            </td>
                            <td data-label="Quantity">
                                <p class="p-2 m-0">
                                    1
                                </p>
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
                                <img src="{!! asset('public/img-src/products/iphone 13 mini.jpeg') !!}" class="order-receive-product-image" alt="Product Image">
                            </td>
                            <td data-label="Name">
                                <p class="p-2 m-0">
                                    iPhone 13 Mini
                                </p>
                            </td>
                            <td data-label="Quantity">
                                <p class="p-2 m-0">
                                    1
                                </p>
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
        </div>
    </div>
@endsection
