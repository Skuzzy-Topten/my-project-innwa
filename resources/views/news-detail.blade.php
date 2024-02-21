@extends('layouts/news-detail')

@section('site title', 'News Detail')

@section('breadcrumbs')
<div class="container">
  <div class="row pt-3 pb-3 ps-2 pe-2">
    <div class="col p-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item"><a href="./news">Phone</a></li>
          <li class="breadcrumb-item active" aria-current="page">iPhone 14</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row pb-3">
    <div class="col-xl-8 col-lg-8 col-md-8 p-2">
      <div class="card">
        <div class="card-body">
          <div class="col p-2">
            <h4 class="p-2 m-0">
              iPhone 14
            </h4>
          </div>
          <div class="col p-2">
            <img src="{!! asset('public/img-src/posts/post 01.png') !!}" class="img-fluid" alt="Image">
          </div>
          <div class="col p-2">
            <p class="p-2 m-0">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
          </div>
          <div class="col p-2">
            <p class="p-2 m-0">
              Categories :
              <a href="#" class="badge bg-primary text-white text-decoration-none">
                Apple
              </a>
              <a href="#" class="badge bg-primary text-white text-decoration-none">
                Phone
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 p-2">
      <div class="card">
        <div class="card-body">
          <div class="col border-bottom p-2">
            <h5 class="p-2 m-0">
              <i class="fa-solid fa-newspaper text-primary"></i> Latest Posts
            </h5>
          </div>
          <div class="row p-2">
            <div class="col-xl-4 col-lg-6 col-md-12 m-auto">
              <a href="#">
                <img src="{!! asset('public/img-src/posts/post 01.png') !!}" class="img-fluid border rounded p-2" alt="Post Image">
              </a>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-12 m-auto">
              <a href="#" class="text-dark text-decoration-none">
                <p class="p-2 m-0">
                  iPhone 14
                </p>
              </a>
              <div class="col p-2">
                <a href="#" class="badge bg-primary text-white text-decoration-none">Apple</a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">Phone</a>
              </div>
            </div>
          </div>
          <div class="row p-2">
            <div class="col-xl-4 col-lg-6 col-md-12 m-auto">
              <a href="#">
                <img src="{!! asset('public/img-src/posts/post 02.png') !!}" class="img-fluid border rounded p-2" alt="Post Image">
              </a>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-12 m-auto">
              <a href="#" class="text-dark text-decoration-none">
                <p class="p-2 m-0">
                  X670E AORUS XTREME
                </p>
              </a>
              <div class="col p-2">
                <a href="#" class="badge bg-primary text-white text-decoration-none">Gigabyte</a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">Motherboard</a>
              </div>
            </div>
          </div>
          <div class="row p-2">
            <div class="col-xl-4 col-lg-6 col-md-12 m-auto">
              <a href="#">
                <img src="{!! asset('public/img-src/posts/post 03.png') !!}" class="img-fluid border rounded p-2" alt="Post Image">
              </a>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-12 m-auto">
              <a href="#" class="text-dark text-decoration-none">
                <p class="p-2 m-0">
                  AORUS GeForce RTX™ 3090
                </p>
              </a>
              <div class="col p-2">
                <a href="#" class="badge bg-primary text-white text-decoration-none">Gigabyte</a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">Graphic Card</a>
              </div>
            </div>
          </div>
          <div class="col border-bottom p-2">
            <h5 class="p-2 m-0">
              <i class="fa-solid fa-hashtag text-primary"></i> Categories
            </h5>
          </div>
          <div class="row p-2">
            <div class="col-xl-12 col-lg-12 col-md-12 m-auto">
              <a href="#" class="badge bg-primary text-white text-decoration-none">Apple</a>
              <a href="#" class="badge bg-primary text-white text-decoration-none">Phone</a>
              <a href="#" class="badge bg-primary text-white text-decoration-none">Gigabyte</a>
              <a href="#" class="badge bg-primary text-white text-decoration-none">Motherboard</a>
              <a href="#" class="badge bg-primary text-white text-decoration-none">Graphic Card</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
