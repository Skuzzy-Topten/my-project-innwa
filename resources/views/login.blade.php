@extends('layouts.login')

@section('site title', 'Login')

@section('content')
    <div class="container">
        <div class="row pt-3 pb-3">
            <div class="col-lg-4 col-md-6 m-auto">
                <div class="col">
                    <h5 class="text-center text-danger p-2 m-0">
                        Sign In
                    </h5>
                </div>
                <form id="">
                    <div class="col p-2">
                        <input type="email" class="form-control innwa" placeholder="Email">
                    </div>
                    <div class="col p-2">
                        <input type="password" class="form-control innwa" placeholder="Password">
                    </div>
                    <div class="col text-center p-2">
                        <button type="submit" class="btn btn-outline-danger rounded-pill">
                            <i class="fa-solid fa-circle-right"></i> Login
                        </button>
                    </div>
                </form>
                <div class="col pt-3 pb-3">
                    <form id="">
                        <div class="text-center col">
                            <button type="button" class="btn btn-outline-danger rounded-pill">
                                <table>
                                    <tr>
                                        <td class="ps-2 pe-2">
                                            <i class="fa-brands fa-google"></i>
                                        </td>
                                        <td class="ps-2 pe-2">
                                            Sign in with Google
                                        </td>
                                    </tr>
                                </table>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
