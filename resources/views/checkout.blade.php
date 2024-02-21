@extends('layouts.checkout')

@section('site title', 'Checkout')

@section('content')
    <div class="container">
        <div class="col pt-3 pb-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="col border-bottom p-2">
                                <h5 class="p-2 m-0">
                                    <i class="fa-solid fa-user text-primary"></i> USER DETAIL
                                </h5>
                            </div>
                            <div class="col p-2">
                                <div class="table-responsive">
                                    <table class="custom-table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    Username
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p-2 m-0">
                                                    Fan Sign
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    Email
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p-2 m-0">
                                                    fansign@gmail.com
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    Address
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p-2 m-0">
                                                    No.(00), Building(0), Kyimyindaing Tsp, Yangon, Myanmar
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="col border-bottom p-2">
                                <h5 class="p-2 m-0">
                                    <i class="fa-solid fa-file-invoice text-primary"></i> INVOICE DETAIL
                                </h5>
                            </div>
                            <div class="col p-2">
                                <div class="table-responsive">
                                    <table class="custom-table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    File
                                                </p>
                                            </td>
                                            <td>
                                                <div class="col p-2">
                                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                                        <i class="fa-solid fa-file-arrow-down"></i> Download
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    Date
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p-2 m-0">
                                                    24.02.2023
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 pt-5 pb-5">
                            <div class="col p-2">
                                <h5 class="p-2 m-0">
                                    <i class="fa-solid fa-basket-shopping text-primary"></i> ORDER DETAIL
                                </h5>
                            </div>
                            <div class="col p-2">
                                <div class="table-responsive">
                                    <table class="table table-borderless align-middle order-table">
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
                                                    <img src="{!! asset('public/img-src/products/iphone 14 pro.jpeg') !!}" class="checkout-product-image" alt="product image">
                                                </td>
                                                <td data-label="Name">
                                                    <p class="p-2 m-0">
                                                        iPhone 14 Pro
                                                    </p>
                                                    <a href="#" class="btn btn-sm border">
                                                        Details
                                                    </a>
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
                                                    <img src="{!! asset('public/img-src/products/iphone 14.jpeg') !!}" class="checkout-product-image" alt="product image">
                                                </td>
                                                <td data-label="Name">
                                                    <p class="p-2 m-0">
                                                        iPhone 14
                                                    </p>
                                                    <a href="#" class="btn btn-sm border">
                                                        Details
                                                    </a>
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
                                                    <img src="{!! asset('public/img-src/products/iphone 13 mini.jpeg') !!}" class="checkout-product-image" alt="product image">
                                                </td>
                                                <td data-label="Name">
                                                    <p class="p-2 m-0">
                                                        iPhone 13 mini
                                                    </p>
                                                    <a href="#" class="btn btn-sm border">
                                                        Details
                                                    </a>
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
                        <div class="col-lg-4 col-md-6">
                            <div class="col border-bottom p-2">
                                <h5 class="p-2 m-0">
                                    <i class="fa-solid fa-file-invoice text-primary"></i> PAYMENT DETAIL
                                </h5>
                            </div>
                            <div class="col p-2">
                                <div class="col text-center p-2">
                                    <label class="form-check-label">
                                        <input type="radio" name="payment" class="form-check-input" value="cash-on-delivery">
                                        Cash on Delivery
                                    </label>
                                </div>
                                <div class="col text-center p-2">
                                    <div class="col p-2">
                                        <p class="p-2 m-0">
                                            <i class="fa-solid fa-building-columns text-primary"></i> Bank Transfer
                                        </p>
                                    </div>
                                    <label class="form-check-label p-2">
                                        <input type="radio" name="payment" class="form-check-input payment-option" value="kbz-pay">
                                        <img src="{!! asset('public/img-src/payment/kbz pay logo.png') !!}" class="payment-logo" alt="payment logo">
                                    </label>
                                    <label class="form-check-label p-2">
                                        <input type="radio" name="payment" class="form-check-input payment-option" value="aya-pay">
                                        <img src="{!! asset('public/img-src/payment/aya pay logo.png') !!}" class="payment-logo" alt="payment logo">
                                    </label>
                                    <label class="form-check-label p-2">
                                        <input type="radio" name="payment" class="form-check-input payment-option" value="mpu">
                                        <img src="{!! asset('public/img-src/payment/mpu logo.png') !!}" class="payment-logo" alt="payment logo">
                                    </label>
                                    <label class="form-check-label p-2">
                                        <input type="radio" name="payment" class="form-check-input payment-option" value="visa">
                                        <img src="{!! asset('public/img-src/payment/visa logo.png') !!}" class="payment-logo" alt="payment logo">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="col border-bottom p-2">
                                <h5 class="p-2 m-0">
                                    <i class="fa-solid fa-file-invoice text-primary"></i> DELIVERY DETAIL
                                </h5>
                            </div>
                            <div class="col p-2">
                                <div class="table-responsive">
                                    <table class="custom-table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    State/Division
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p-2 m-0">
                                                    -
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    Township
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p-2 m-0">
                                                    -
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    Address
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p-2 m-0">
                                                    -
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    Price
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p-2 m-0">
                                                    -
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="col p-2">
                                                    <select class="form-select">
                                                        <option selected>State/Division</option>
                                                        <option value="yangon">Yangon</option>
                                                        <option value="mandalay">Mandalay</option>
                                                        <option value="pathein">Pathein</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col p-2">
                                                    <select class="form-select">
                                                        <option selected>Township</option>
                                                        <option value="hledan">Hledan</option>
                                                        <option value="hlaing">Hlaing</option>
                                                        <option value="thamine">Thamine</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="col p-2">
                                                    <textarea class="form-control" rows="1" placeholder="Address"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="col text-center p-2">
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="fa-solid fa-pen"></i> UPDATE
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="col border-bottom p-2">
                                <h5 class="p-2 m-0">
                                    <i class="fa-solid fa-tag text-primary"></i> COUPON DETAIL
                                </h5>
                            </div>
                            <div class="col p-2">
                                <div class="table-responsive">
                                    <table class="custom-table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    Code
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p-2 m-0">
                                                    IWCOUP1105
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="text-secondary p-2 m-0">
                                                    Discount
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p-2 m-0">
                                                    <i class="fa-solid fa-circle-minus text-primary"></i> 15,000 Ks
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 pt-5 pb-5">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="fa-solid fa-circle-check"></i> ORDER CONFIRM
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
