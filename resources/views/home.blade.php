@extends('layouts.home')

@section('site title')
INNWA IT & Mobile
@endsection

@section('banner')
<div id="homeBanner" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="{{asset('public/img-src/banner/home/Frame 1.png')}}" class="img-fluid banner" alt="Slider 1">
      <div class="carousel-caption text-start">
        <h1>
          iphone 14
        </h1>
        <h5 class="d-none d-lg-block">
          Big and bigger
        </h5>
        <p class="d-none d-lg-block w-50">
          iOS 16 lets you customize your Lock Screen in fun new ways. Layer a photo to make it pop.
          Track your Activity rings. And see live updates from your favorite apps.
        </p>
        <button type="button" class="btn btn-outline-dark rounded-pill">
          Read More
        </button>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="{{asset('public/img-src/banner/home/Frame 2.png')}}" class="img-fluid banner" alt="Slider 2">
      <div class="carousel-caption text-start">
        <h1>
          iPad Air
        </h1>
        <h5 class="d-none d-lg-block">
          Light. Bright. Full of might.
        </h5>
        <p class="d-none d-lg-block w-50">
          iPad Air lets you immerse yourself in whatever you’re reading, watching, or creating.
          he 10.9-inch Liquid Retina display features advanced technologies like True Tone, P3 wide color, and an antireflective coating.
        </p>
        <button type="button" class="btn btn-outline-dark rounded-pill">
          Read More
        </button>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="{{asset('public/img-src/banner/home/Frame 3.png')}}" class="img-fluid banner" alt="Slider 3">
      <div class="carousel-caption text-start">
        <h1>
          Rainforest Braided Solo Loop
        </h1>
        <h5 class="d-none d-lg-block">
          Size 4
        </h5>
        <p class="d-none d-lg-block w-50">
          Each Braided Solo Loop band features a unique, stretchable design that’s ultracomfortable and easy to slip on and off your wrist.
        </p>
        <button type="button" class="btn btn-outline-dark rounded-pill">
          Read More
        </button>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="50000">
      <iframe src="https://www.youtube-nocookie.com/embed/WuEH265pUy4?controls=0&autoplay=1&mute=1&playlist=WuEH265pUy4&loop=1" class="homeBannerVideo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="carousel-item" data-bs-interval="50000">
      <iframe src="https://www.youtube.com/embed/TBTgQbjRsqg?controls=0&autoplay=1&mute=1&playlist=TBTgQbjRsqg&loop=1" class="homeBannerVideo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#homeBanner" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#homeBanner" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@endsection

@section('brandSlider01')
<div class="col border">
  <marquee class="pt-2">
    <img src="{{asset('public/img-src/brand/asus.png')}}" alt="asus" class="brandLogo">
    <img src="{{asset('public/img-src/brand/dell.png')}}" alt="dell" class="brandLogo">
    <img src="{{asset('public/img-src/brand/huawei.png')}}" alt="huawei" class="brandLogo">
    <img src="{{asset('public/img-src/brand/msi.png')}}" alt="msi" class="brandLogo">
    <img src="{{asset('public/img-src/brand/oppo.png')}}" alt="oppo" class="brandLogo">
    <img src="{{asset('public/img-src/brand/apple.png')}}" alt="apple" class="brandLogo">
    <img src="{{asset('public/img-src/brand/gigabyte.png')}}" alt="gigabyte" class="brandLogo">
    <img src="{{asset('public/img-src/brand/hp.png')}}" alt="hp" class="brandLogo">
    <img src="{{asset('public/img-src/brand/intel.png')}}" alt="intel" class="brandLogo">
    <img src="{{asset('public/img-src/brand/keychron.png')}}" alt="keychron" class="brandLogo">
    <img src="{{asset('public/img-src/brand/vivo.png')}}" alt="vivo" class="brandLogo">
    <img src="{{asset('public/img-src/brand/lenovo.png')}}" alt="lenovo" class="brandLogo">
    <img src="{{asset('public/img-src/brand/samsung.png')}}" alt="samsung" class="brandLogo">
  </marquee>
</div>
@endsection

@section('productPromotionSection01')
<div class="container-fluid">
  <div class="row p-2">
    <!-- sidebar carousel 
    <div class="col-xl-3 col-md-12 m-auto">
      <div class="row p-1">
        <div class="col-xl-12 col-md-6 p-1">
          <div id="sidebarCarousel01" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('public/img-src/sidebar/sbv01.png')}}" class="img-fluid" alt="sidebar image 01">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv02.png')}}" class="img-fluid" alt="sidebar image 02">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv03.png')}}" class="img-fluid" alt="sidebar image 03">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sidebarCarousel01" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sidebarCarousel01" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-xl-12 col-md-6 p-1">
          <div id="sidebarCarousel02" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('public/img-src/sidebar/sbv04.png')}}" class="img-fluid" alt="sidebar image 04">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv05.png')}}" class="img-fluid" alt="sidebar image 05">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv06.png')}}" class="img-fluid" alt="sidebar image 06">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sidebarCarousel02" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sidebarCarousel02" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div -->
    <!-- products -->
    <div class="col-xl-12 col-md-12 my-auto">
      <div class="row">
        <div class="col">
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item border-0">
              <h3 class="p-2 m-0">
                Promotion Products
              </h3>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone 14 pro.jpeg')}}" class="productImage" alt="iphone 14 Pro">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone 14 Pro
              </h5>
              <h5 class="card-title text-danger text-center m-0">
                999,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <span class="badge text-bg-purple mb-2">
                Cashback - <strong>10,000 MMK</strong>
              </span>
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone 14.jpeg')}}" class="productImage" alt="iphone 14">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone 14
              </h5>
              <h5 class="card-title text-danger text-center m-0">
                999,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
                <span class="badge text-bg-success mb-2">
                Gift - <strong>Umbrella</strong>
              </span>
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone 13 mini.jpeg')}}" class="productImage" alt="iphone 13 mini">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone 13 mini
              </h5>
              <h5 class="card-title text-danger text-center m-0">
                999,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
                <span class="badge text-bg-danger text-white mb-2">
                Discount - <strong>10,000 MMK</strong>
              </span>
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone se.jpeg')}}" class="productImage" alt="iphone SE">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone SE
              </h5>
              <h5 class="card-title text-danger text-center m-0">
                999,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
                <span class="badge text-bg-danger text-white mb-2">
                Discount - <strong>10,000 MMK</strong>
              </span>
              <span class="badge text-bg-purple mb-2">
                Cashback - <strong>10,000 MMK</strong>
              </span>
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone se.jpeg')}}" class="productImage" alt="iphone SE">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone SE
              </h5>
              <h5 class="card-title text-danger text-center m-0">
                999,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
                <span class="badge text-bg-danger text-white mb-2">
                Discount - <strong>10,000 MMK</strong>
              </span>
                <span class="badge text-bg-purple mb-2">
                Cashback - <strong>10,000 MMK</strong>
              </span>
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone se.jpeg')}}" class="productImage" alt="iphone SE">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone SE
              </h5>
              <h5 class="card-title text-danger text-center m-0">
                999,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
                <span class="badge text-bg-purple mb-2">
                Cashback - <strong>10,000 MMK</strong>
              </span>
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('productSection01')
<div class="container-fluid">
  <div class="row p-2">
    <!-- sidebar carousel 
    <div class="col-xl-3 col-md-12 m-auto">
      <div class="row p-1">
        <div class="col-xl-12 col-md-6 p-1">
          <div id="sidebarCarousel01" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('public/img-src/sidebar/sbv01.png')}}" class="img-fluid" alt="sidebar image 01">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv02.png')}}" class="img-fluid" alt="sidebar image 02">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv03.png')}}" class="img-fluid" alt="sidebar image 03">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sidebarCarousel01" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sidebarCarousel01" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-xl-12 col-md-6 p-1">
          <div id="sidebarCarousel02" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('public/img-src/sidebar/sbv04.png')}}" class="img-fluid" alt="sidebar image 04">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv05.png')}}" class="img-fluid" alt="sidebar image 05">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv06.png')}}" class="img-fluid" alt="sidebar image 06">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sidebarCarousel02" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sidebarCarousel02" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div -->
    <!-- products -->
    <div class="col-xl-12 col-md-12 my-auto">
      <div class="row">
        <div class="col">
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item border-0">
              <h3 class="p-2 m-0">
                Latest Phones
              </h3>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone 14 pro.jpeg')}}" class="productImage" alt="iphone 14 Pro">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone 14 Pro
              </h5>
              <h5 class="card-title text-danger text-center">
                999,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone 14.jpeg')}}" class="productImage" alt="iphone 14">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone 14
              </h5>
              <h5 class="card-title text-danger text-center">
                799,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone 13 mini.jpeg')}}" class="productImage" alt="iphone 13 mini">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone 13 mini
              </h5>
              <h5 class="card-title text-danger text-center">
                588,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone se.jpeg')}}" class="productImage" alt="iphone SE">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone SE
              </h5>
              <h5 class="card-title text-danger text-center">
                429,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone se.jpeg')}}" class="productImage" alt="iphone SE">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone SE
              </h5>
              <h5 class="card-title text-danger text-center">
                429,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/iphone se.jpeg')}}" class="productImage" alt="iphone SE">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                iphone SE
              </h5>
              <h5 class="card-title text-danger text-center">
                429,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('subBanner01')
<div class="container-fluid">
  <div class="col pt-3 pb-3 ps-1 pe-1">
    <img src="{{asset('public/img-src/sub-banner/sbh01.png')}}" alt="sub banner 01" class="img-fluid promotionBannerImage">
  </div>
</div>
@endsection

@section('productSection02')
<div class="container-fluid">
  <div class="row p-2">
    <!-- sidebar carousel
    <div class="col-xl-3 col-md-12 m-auto">
      <div class="row p-1">
        <div class="col-xl-12 col-md-6 p-1">
          <div id="sidebarCarousel03" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('public/img-src/sidebar/sbv07.png')}}" class="img-fluid" alt="sidebar image 07">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv08.png')}}" class="img-fluid" alt="sidebar image 08">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv09.png')}}" class="img-fluid" alt="sidebar image 09">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sidebarCarousel03" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sidebarCarousel03" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-xl-12 col-md-6 p-1">
          <div id="sidebarCarousel04" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('public/img-src/sidebar/sbv10.png')}}" class="img-fluid" alt="sidebar image 10">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv11.png')}}" class="img-fluid" alt="sidebar image 11">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv12.png')}}" class="img-fluid" alt="sidebar image 12">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sidebarCarousel04" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sidebarCarousel04" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div -->
    <!-- products -->
    <div class="col-xl-12 col-md-12 my-auto">
      <div class="row">
        <div class="col">
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item border-0">
              <h3 class="p-2 m-0">
                Latest Laptops
              </h3>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/titan gt77.png')}}" class="productImage" alt="tital gt77">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                Titan GT77
              </h5>
              <h5 class="card-title text-danger text-center">
                809,900 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/macbook air.png')}}" class="productImage" alt="macbook air">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                Macbook Air
              </h5>
              <h5 class="card-title text-danger text-center">
                999,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/inspiron 14.png')}}" class="productImage" alt="inspiron 14">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                Inspiron 14
              </h5>
              <h5 class="card-title text-danger text-center">
                169,900 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/victus.png')}}" class="productImage" alt="Victus by HP">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                Victus Laptop
              </h5>
              <h5 class="card-title text-danger text-center">
                799,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/victus.png')}}" class="productImage" alt="Victus by HP">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                Victus Laptop
              </h5>
              <h5 class="card-title text-danger text-center">
                799,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/victus.png')}}" class="productImage" alt="Victus by HP">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                Victus Laptop
              </h5>
              <h5 class="card-title text-danger text-center">
                799,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('subBanner02')
<div class="container-fluid">
  <div class="col pt-3 pb-3 ps-1 pe-2">
    <img src="{{asset('public/img-src/sub-banner/sbh02.png')}}" alt="sub banner 02" class="img-fluid promotionBannerImage">
  </div>
</div>
@endsection

@section('productSection03')
<div class="container-fluid">
  <div class="row p-2">
    <!-- sidebar carousel
    <div class="col-xl-3 col-md-12 m-auto">
      <div class="row p-1">
        <div class="col-xl-12 col-md-6 p-1">
          <div id="sidebarCarousel05" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('public/img-src/sidebar/sbv13.png')}}" class="img-fluid" alt="sidebar image 13">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv14.png')}}" class="img-fluid" alt="sidebar image 14">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv15.png')}}" class="img-fluid" alt="sidebar image 15">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sidebarCarousel05" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sidebarCarousel05" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-xl-12 col-md-6 p-1">
          <div id="sidebarCarousel06" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('public/img-src/sidebar/sbv16.png')}}" class="img-fluid" alt="sidebar image 15">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv17.png')}}" class="img-fluid" alt="sidebar image 17">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/img-src/sidebar/sbv18.png')}}" class="img-fluid" alt="sidebar image 18">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sidebarCarousel06" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sidebarCarousel06" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div -->
    <!-- products -->
    <div class="col-xl-12 col-md-12 my-auto">
      <div class="row">
        <div class="col">
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item border-0">
              <h3 class="p-2 m-0">
                Latest Computer Products
              </h3>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/watch ultra.png')}}" class="productImage" alt="watch ultra">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                Apple Watch Ultra
              </h5>
              <h5 class="card-title text-danger text-center">
                799,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/aoros m4.png')}}" class="productImage" alt="aoros m4">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                AOROS M4
              </h5>
              <h5 class="card-title text-danger text-center">
                560,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/ipad pro.png')}}" class="productImage" alt="ipad pro">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                ipad Pro
              </h5>
              <h5 class="card-title text-danger text-center">
                799,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/keychron q1 qmk.png')}}" class="productImage" alt="keychron q1 qmk">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                Keychron Q1 QMK
              </h5>
              <h5 class="card-title text-danger text-center">
                152,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/keychron q1 qmk.png')}}" class="productImage" alt="keychron q1 qmk">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                Keychron Q1 QMK
              </h5>
              <h5 class="card-title text-danger text-center">
                152,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="card mt-2 mb-2">
            <div class="card-header bg-white text-center border-0">
              <img src="{{asset('public/img-src/products/keychron q1 qmk.png')}}" class="productImage" alt="keychron q1 qmk">
            </div>
            <div class="card-body pt-2 pb-0">
              <h5 class="card-title text-center">
                Keychron Q1 QMK
              </h5>
              <h5 class="card-title text-danger text-center">
                152,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="card-footer bg-white text-center border-0">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
