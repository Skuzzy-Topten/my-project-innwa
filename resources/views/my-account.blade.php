@extends('layouts.my-account')

@section('site title', 'My Account')

@section('content')
    <div class="container">
        <div class="col-lg-4 col-md-6 pt-5 m-auto">
            <div class="col text-center">
                <img src="{!! asset('public/img-src/users/pyae phyo aung.png') !!}" class="user-profile-image border rounded-circle shadow" alt="Profile Image">
            </div>
            <div class="col text-center pt-3">
                <h5 class="p-2 m-0">
                    Pyae Phyo Aung
                </h5>
            </div>
        </div>
        <div class="col pt-3 pb-5">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <i class="fa-solid fa-user"></i> Profile
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill" data-bs-target="#pills-order" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <i class="fa-solid fa-basket-shopping"></i> Order
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-service-tab" data-bs-toggle="pill" data-bs-target="#pills-service" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <i class="fa-solid fa-wrench"></i> Service
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <form id="">
                        <div class="col-lg-4 col-md-6 m-auto">
                            <div class="col p-2">
                                <label class="form-label">
                                    Profile Image
                                </label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="col p-2">
                                <label class="form-label">
                                    Username
                                </label>
                                <input type="text" class="form-control" placeholder="Pyae Phyo Aung">
                            </div>
                            <div class="col p-2">
                                <label class="form-label">
                                    Email
                                </label>
                                <input type="email" class="form-control" placeholder="pyaephyoaung@gmail.com">
                            </div>
                            <div class="col p-2">
                                <label class="form-label">
                                    Password
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Old Password">
                                    <input type="password" class="form-control" placeholder="New Password">
                                </div>
                            </div>
                            <div class="col p-2">
                                <label class="form-label">
                                    Telephone
                                </label>
                                <input type="text" class="form-control" placeholder="+95 912345678">
                            </div>
                            <div class="col p-2">
                                <label class="form-label">
                                    State/Division
                                </label>
                                <select class="form-select">
                                  <option selected>Choose</option>
                                  <option value="Yangon">Yangon</option>
                                  <option value="Mandalay">Mandalay</option>
                                  <option value="Pathein">Pathein</option>
                                </select>
                            </div>
                            <div class="col p-2">
                                <label class="form-label">
                                    Township
                                </label>
                                <select class="form-select">
                                  <option selected>Choose</option>
                                  <option value="Hledan">Hledan</option>
                                  <option value="Hlaing">Hlaing</option>
                                  <option value="Thamine">Thamine</option>
                                </select>
                            </div>
                            <div class="col p-2">
                                <label class="form-label">
                                    Address
                                </label>
                                <textarea class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea>
                            </div>
                            <div class="col text-center p-2">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="fa-solid fa-pen"></i> UPDATE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle order-table">
                            <thead>
                                <tr class="bg-light text-center border rounded">
                                    <th>
                                        <h5 class="p-2 m-0">
                                            No.
                                        </h5>
                                    </th>
                                    <th>
                                        <h5 class="p-2 m-0">
                                            Order No.
                                        </h5>
                                    </th>
                                    <th>
                                        <h5 class="p-2 m-0">
                                            Order Status
                                        </h5>
                                    </th>
                                    <th>
                                        <h5 class="p-2 m-0">
                                            Total Amount
                                        </h5>
                                    </th>
                                    <th>
                                        <h5 class="p-2 m-0">
                                            Order Date
                                        </h5>
                                    </th>
                                    <th>
                                        <h5 class="p-2 m-0">
                                            Detail
                                        </h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center border rounded">
                                    <td data-label="No.">
                                        <p class="p-2 m-0">
                                            1
                                        </p>
                                    </td>
                                    <td data-label="Order No.">
                                        <p class="p-2 m-0">
                                            1108
                                        </p>
                                    </td>
                                    <td data-label="Order Status">
                                        <p class="text-danger p-2 m-0">
                                            Pending
                                        </p>
                                    </td>
                                    <td data-label="Total Amount">
                                        <p class="p-2 m-0">
                                            100,000
                                        </p>
                                    </td>
                                    <td data-label="Order Date">
                                        <p class="text-danger p-2 m-0">
                                            20.02.2023
                                        </p>
                                    </td>
                                    <td data-label="Detail">
                                      <a href="" class="btn btn-sm border">
                                          Details
                                      </a>
                                    </td>
                                </tr>
                                <tr class="text-center border rounded">
                                    <td data-label="No.">
                                        <p class="p-2 m-0">
                                            1
                                        </p>
                                    </td>
                                    <td data-label="Order No.">
                                        <p class="p-2 m-0">
                                            1108
                                        </p>
                                    </td>
                                    <td data-label="Order Status">
                                        <p class="text-primary p-2 m-0">
                                            Processing
                                        </p>
                                    </td>
                                    <td data-label="Total Amount">
                                        <p class="p-2 m-0">
                                            1,200,000
                                        </p>
                                    </td>
                                    <td data-label="Order Date">
                                        <p class="p-2 m-0">
                                            17.02.2023
                                        </p>
                                    </td>
                                    <td data-label="Detail">
                                      <a href="" class="btn btn-sm border">
                                          Details
                                      </a>
                                    </td>
                                </tr>
                                <tr class="text-center border rounded">
                                    <td data-label="No.">
                                        <p class="p-2 m-0">
                                            3
                                        </p>
                                    </td>
                                    <td data-label="Order No.">
                                        <p class="p-2 m-0">
                                            1275
                                        </p>
                                    </td>
                                    <td data-label="Order Status">
                                        <p class="text-success p-2 m-0">
                                            Completed
                                        </p>
                                    </td>
                                    <td data-label="Total Amount">
                                        <p class="p-2 m-0">
                                            2000,000
                                        </p>
                                    </td>
                                    <td data-label="Order Date">
                                        <p class="p-2 m-0">
                                            02.02.2023
                                        </p>
                                    </td>
                                    <td data-label="Detail">
                                      <a href="" class="btn btn-sm border">
                                          Details
                                      </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-service" role="tabpanel" aria-labelledby="pills-service-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle order-table">
                            <thead>
                                <tr class="bg-light text-center border rounded">
                                    <th>
                                        <h5 class="p-2 m-0">
                                            Service
                                        </h5>
                                    </th>
                                    <th>
                                        <h5 class="p-2 m-0">
                                            Date
                                        </h5>
                                    </th>
                                    <th>
                                        <h5 class="p-2 m-0">
                                            Time
                                        </h5>
                                    </th>
                                    <th>
                                        <h5 class="p-2 m-0">
                                            Details
                                        </h5>
                                    </th>
                                    <th>
                                        <h5 class="p-2 m-0">
                                            Status
                                        </h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center border rounded">
                                    <td data-label="Service">
                                        <p class="p-2 m-0">
                                            Desktop
                                        </p>
                                    </td>
                                    <td data-label="Date">
                                        <p class="p-2 m-0">
                                            15.02.2023
                                        </p>
                                    </td>
                                    <td data-label="Time">
                                        <p class="p-2 m-0">
                                            05:00
                                        </p>
                                    </td>
                                    <td data-label="Details">
                                        <p class="text-start p-2 m-0">
                                            My Monitor Screen is lagging.
                                        </p>
                                    </td>
                                    <td data-label="Status">
                                        <p class="text-danger p-2 m-0">
                                            Pending
                                        </p>
                                    </td>
                                </tr>
                                <tr class="text-center border rounded">
                                    <td data-label="Service">
                                        <p class="p-2 m-0">
                                            Laptop
                                        </p>
                                    </td>
                                    <td data-label="Date">
                                        <p class="p-2 m-0">
                                            13.01.2023
                                        </p>
                                    </td>
                                    <td data-label="Time">
                                        <p class="p-2 m-0">
                                            13:00
                                        </p>
                                    </td>
                                    <td data-label="Details">
                                        <p class="text-start p-2 m-0">
                                            I want to check my Laptop Battery's health.
                                        </p>
                                    </td>
                                    <td data-label="Status">
                                        <p class="text-primary p-2 m-0">
                                            Scheduled
                                        </p>
                                    </td>
                                </tr>
                                <tr class="text-center border rounded">
                                    <td data-label="Service">
                                        <p class="p-2 m-0">
                                            Phone
                                        </p>
                                    </td>
                                    <td data-label="Date">
                                        <p class="p-2 m-0">
                                            1.01.2023
                                        </p>
                                    </td>
                                    <td data-label="Time">
                                        <p class="p-2 m-0">
                                            4:30
                                        </p>
                                    </td>
                                    <td data-label="Details">
                                        <p class="text-start p-2 m-0">
                                            My Phone Screen is cracked. I wanna replace with the new one. Samsung Note II.
                                        </p>
                                    </td>
                                    <td data-label="Status">
                                        <p class="text-secondary p-2 m-0">
                                            Canceled
                                        </p>
                                    </td>
                                </tr>
                                <tr class="text-center border rounded">
                                    <td data-label="Service">
                                        <p class="p-2 m-0">
                                            Printer
                                        </p>
                                    </td>
                                    <td data-label="Date">
                                        <p class="p-2 m-0">
                                            28.12.2022
                                        </p>
                                    </td>
                                    <td data-label="Time">
                                        <p class="p-2 m-0">
                                            17:30
                                        </p>
                                    </td>
                                    <td data-label="Details">
                                        <p class="text-start p-2 m-0">
                                            I can't print. The ink is full but not working.
                                        </p>
                                    </td>
                                    <td data-label="Status">
                                        <p class="text-success p-2 m-0">
                                            Completed
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
